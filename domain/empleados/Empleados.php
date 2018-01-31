<?php

include '../../domain/personas/Personas.php';

class Empleados extends Personas {

    private $empleadoid;
    private $empleadocedula;
    private $tipoempleado;
    private $empleadocontrasenia;
    private $empleadoedad;
    private $empleadosexo;
    private $empleadoestadocivil;
    private $empleadobanco;
    private $empleadocuentabancaria;
    private $fechaingreso;
    private $empleadoestado;
    
    public function Empleados($empleadoid, $empleadocedula, $tipoempleado, $empleadocontrasenia, $empleadoedad, $empleadosexo, $empleadoestadocivil, $empleadobanco, $empleadocuentabancaria, $fechaingreso, $empleadoestado) {
        $this->empleadoid = $empleadoid;
        $this->empleadocedula = $empleadocedula;
        $this->tipoempleado = $tipoempleado;
        $this->empleadocontrasenia = $empleadocontrasenia;
        $this->empleadoedad = $empleadoedad;
        $this->empleadosexo = $empleadosexo;
        $this->empleadoestadocivil = $empleadoestadocivil;
        $this->empleadobanco = $empleadobanco;
        $this->empleadocuentabancaria = $empleadocuentabancaria;
        $this->fechaingreso = $fechaingreso;
        $this->empleadoestado = $empleadoestado;
    }
    public function getEmpleadoid() {
        return $this->empleadoid;
    }

    public function getEmpleadocedula() {
        return $this->empleadocedula;
    }

    public function getTipoempleado() {
        return $this->tipoempleado;
    }

    public function getEmpleadocontrasenia() {
        return $this->empleadocontrasenia;
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

    public function getFechaingreso() {
        return $this->fechaingreso;
    }

    public function getEmpleadoestado() {
        return $this->empleadoestado;
    }

    public function setEmpleadoid($empleadoid) {
        $this->empleadoid = $empleadoid;
    }

    public function setEmpleadocedula($empleadocedula) {
        $this->empleadocedula = $empleadocedula;
    }

    public function setTipoempleado($tipoempleado) {
        $this->tipoempleado = $tipoempleado;
    }

    public function setEmpleadocontrasenia($empleadocontrasenia) {
        $this->empleadocontrasenia = $empleadocontrasenia;
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

    public function setFechaingreso($fechaingreso) {
        $this->fechaingreso = $fechaingreso;
    }

    public function setEmpleadoestado($empleadoestado) {
        $this->empleadoestado = $empleadoestado;
    }

}
