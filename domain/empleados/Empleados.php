<?php

include '../../domain/personas/Personas.php';

class Empleados extends Personas {

    private $empleadoid;
    private $personaid;
    private $tipoempleado;
    private $empleadocedula;
    private $empleadocontrasenia;
    private $fechaingreso;
    private $empleadoedad;
    private $empleadosexo;
    private $empleadoestadocivil;
    private $empleadobanco;
    private $empleadocuentabancaria;
    private $empleadoestado;

    public function Empleados($empleadoid, $personaid, $tipoempleado, $empleadocedula, $empleadocontrasenia, $fechaingreso, $empleadoedad, $empleadosexo, $empleadoestadocivil, $empleadobanco, $empleadocuentabancaria, $empleadoestado) {
        $this->empleadoid = $empleadoid;
        $this->personaid = $personaid;
        $this->tipoempleado = $tipoempleado;
        $this->empleadocedula = $empleadocedula;
        $this->empleadocontrasenia = $empleadocontrasenia;
        $this->fechaingreso = $fechaingreso;
        $this->empleadoedad = $empleadoedad;
        $this->empleadosexo = $empleadosexo;
        $this->empleadoestadocivil = $empleadoestadocivil;
        $this->empleadobanco = $empleadobanco;
        $this->empleadocuentabancaria = $empleadocuentabancaria;
        $this->empleadoestado = $empleadoestado;
    }

    public function getEmpleadoid() {
        return $this->empleadoid;
    }

    public function getPersonaid() {
        return $this->personaid;
    }

    public function getTipoempleado() {
        return $this->tipoempleado;
    }

    public function getEmpleadocedula() {
        return $this->empleadocedula;
    }

    public function getEmpleadocontrasenia() {
        return $this->empleadocontrasenia;
    }

    public function getFechaingreso() {
        return $this->fechaingreso;
    }

    public function getEmpleadoedad() {
        return $this->empleadoedad;
    }

    public function getEmpleadosexo() {
        return $this->empleadosexo;
    }

    public function getEmpleadoestadocivil() {
        return $this->empleadoestadocivil;
    }

    public function getEmpleadobanco() {
        return $this->empleadobanco;
    }

    public function getEmpleadocuentabancaria() {
        return $this->empleadocuentabancaria;
    }

    public function getEmpleadoestado() {
        return $this->empleadoestado;
    }

    public function setEmpleadoid($empleadoid) {
        $this->empleadoid = $empleadoid;
    }

    public function setPersonaid($personaid) {
        $this->personaid = $personaid;
    }

    public function setTipoempleado($tipoempleado) {
        $this->tipoempleado = $tipoempleado;
    }

    public function setEmpleadocedula($empleadocedula) {
        $this->empleadocedula = $empleadocedula;
    }

    public function setEmpleadocontrasenia($empleadocontrasenia) {
        $this->empleadocontrasenia = $empleadocontrasenia;
    }

    public function setFechaingreso($fechaingreso) {
        $this->fechaingreso = $fechaingreso;
    }

    public function setEmpleadoedad($empleadoedad) {
        $this->empleadoedad = $empleadoedad;
    }

    public function setEmpleadosexo($empleadosexo) {
        $this->empleadosexo = $empleadosexo;
    }

    public function setEmpleadoestadocivil($empleadoestadocivil) {
        $this->empleadoestadocivil = $empleadoestadocivil;
    }

    public function setEmpleadobanco($empleadobanco) {
        $this->empleadobanco = $empleadobanco;
    }

    public function setEmpleadocuentabancaria($empleadocuentabancaria) {
        $this->empleadocuentabancaria = $empleadocuentabancaria;
    }

    public function setEmpleadoestado($empleadoestado) {
        $this->empleadoestado = $empleadoestado;
    }

}
