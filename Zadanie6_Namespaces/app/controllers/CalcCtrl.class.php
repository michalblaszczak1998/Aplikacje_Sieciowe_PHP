<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora kredytowego
 * @author Michał Błaszczak
 *
 */
class CalcCtrl
{

    private $form;
    private $result;

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct()
    {
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    /**
     * Pobranie parametrów
     */
    public function getParams()
    {
        $this->form->loanValue = isset($_REQUEST ['loanValue']) ? $_REQUEST ['loanValue'] : null;
        $this->form->yearsOfCredit = isset($_REQUEST ['yearsOfCredit']) ? $_REQUEST ['yearsOfCredit'] : null;
        $this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST ['percent'] : null;
    }

    /**
     * Walidacja parametrów
     * @return false|true
     */
    public function validate()
    {
        if (!(isset ($this->form->loanValue) && isset ($this->form->yearsOfCredit) && isset ($this->form->percent))) {
            return false;
        }

        if ($this->form->loanValue == null) {
            getMessages()->addError('Nie podano kwoty pożyczki.');
        }

        if ($this->form->yearsOfCredit == null) {
            getMessages()->addError('Nie określono czasu trwania pożyczki.');
        }

        if ($this->form->percent == null) {
            getMessages()->addError('Nie podano stopy oprocentowania.');
        }

        return !getMessages()->isError();
    }

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function process()
    {

        $this->getparams();

        if ($this->validate()) {
            $this->result->result = ($this->form->loanValue + ($this->form->loanValue * ($this->form->percent / 100))) / ($this->form->yearsOfCredit * 12);

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }


    /**
     * Wygenerowanie widoku
     */
    public function generateView()
    {
        getSmarty()->assign('page_title', 'Przykład 06b');
        getSmarty()->assign('page_description', 'Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
        getSmarty()->assign('page_header', 'Przestrzenie nazw i automatyczne ładowanie klas');

        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('CalcView.tpl');
    }
}
