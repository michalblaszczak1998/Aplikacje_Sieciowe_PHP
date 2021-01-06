{extends file="main.tpl"}

{block name=content}
	<div class="pure-menu pure-menu-horizontal bottom-margin">
		<a href="{$conf->action_url}logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
		<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
	</div>
	<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
		<fieldset>
			<label>Kwota kredytu: </label>
			<input type="number" placeholder="Kwota pożyczki" min="1" name="loanValue" value="{$form->loanValue}"/><br/>
			<label>Na ile lat: </label>
			<input type="number" min="1" placeholder="Okres" name="yearsOfCredit" value="{$form->yearsOfCredit}"/><br/>
			<label>Oprocentowanie: </label>
			<input type="number" min="1" placeholder="Oprocentowanie" name="percent" value="{$form->percent}"/><br/>
		</fieldset>
		<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
	</form>
	{include file='messages.tpl'}

	{if isset($res->result)}
		<div class="messages info">
			Miesięczna rata będzie wynosić: {$res->result}zł
		</div>
	{/if}

{/block}