<?php
class Paciente
{
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $sexo;
    public function __construct($ide, $nom, $ape, $fNa, $sex)///el constructor le asigna valor a los atributos, por lo tanto no son necesarios aqui los setter
    {
        $this->identificacion = $ide;
        $this->nombres = $nom;
        $this->apellidos = $ape;
        $this->fechaNacimiento = $fNa;
        $this->sexo = $sex;
    }
    public function obtenerIdentificacion()
    {
        return $this->identificacion;
    }
    public function obtenerNombres()
    {
        return $this->nombres;
    }
    public function obtenerApellidos()
    {
        return $this->apellidos;
    }
    public function obtenerFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    public function obtenerSexo()
    {
        return $this->sexo;
    }
}
