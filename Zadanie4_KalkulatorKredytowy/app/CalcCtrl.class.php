<?php

require_once $conf->root_path . '/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/lib/Messages.class.php';
require_once $conf->root_path . '/app/CalcForm.class.php';
require_once $conf->root_path . '/app/CalcResult.class.php';

class CalcCtrl
{

    private Messages $msgs;
    private CalcForm $form;
    private CalcResult $result;

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct()
    {
        $this->msgs = new Messages();
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
     * @return true jeśli brak błedów, false w przeciwnym wypadku
     */
    public function validate()
    {
        if (!(isset ($this->form->loanValue) && isset ($this->form->yearsOfCredit) && isset ($this->form->percent))) {
            return false;
        }

        if ($this->form->loanValue == null) {
            $this->msgs->addError('Nie podano kwoty pożyczki.');
        }

        if ($this->form->yearsOfCredit == null) {
            $this->msgs->addError('Nie określono czasu trwania pożyczki.');
        }

        if ($this->form->percent == null) {
            $this->msgs->addError('Nie podano stopy oprocentowania.');
        }

        return !$this->msgs->isError();
    }

    /**
     * Pobranie wartości, walidacja, obliczenie i wyświetlenie
     */
    public function process()
    {

        $this->getparams();

        if ($this->validate()) {
            $this->result->result = ($this->form->loanValue + ($this->form->loanValue * ($this->form->percent / 100))) / ($this->form->yearsOfCredit * 12);

            $this->msgs->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    /**
     * Wygenerowanie widoku
     */
    public function generateView()
    {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('page_title', 'PD 05');
        $smarty->assign('page_description', 'Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
        $smarty->assign('page_header', 'Obiekty w PHP');

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path . '/app/CalcView.html');
    }
}
