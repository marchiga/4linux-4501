<?php

class Medicos{
	public $dadosDoPaciente;
	
	public function obtemFicha($dadosPaciente = null){
		$this->dadosDoPaciente = $dadosPaciente;
	}
	
	public function lerDadosPaciente() {
		return $this->dadosDoPaciente;
	}
}