/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.autentic.entities;

/**
 *
 * @author ivanf
 */
public class datosUsuario {
    
     private int idUsuario;
     private String NombreUsuario;
     private String cedula;
     private String direccion;
     private int celular;
     private String correo;
     private int confirmacion;

    public datosUsuario(int idUsuario, String NombreUsuario, String cedula, String direccion, int celular, String correo, int confirmacion) {
        this.idUsuario = idUsuario;
        this.NombreUsuario = NombreUsuario;
        this.cedula = cedula;
        this.direccion = direccion;
        this.celular = celular;
        this.correo = correo;
        this.confirmacion = confirmacion;
    }

    public int getIdUsuario() {
        return idUsuario;
    }

    public void setIdUsuario(int idUsuario) {
        this.idUsuario = idUsuario;
    }

    public String getNombreUsuario() {
        return NombreUsuario;
    }

    public void setNombreUsuario(String NombreUsuario) {
        this.NombreUsuario = NombreUsuario;
    }

    public String getCedula() {
        return cedula;
    }

    public void setCedula(String cedula) {
        this.cedula = cedula;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public int getCelular() {
        return celular;
    }

    public void setCelular(int celular) {
        this.celular = celular;
    }

    public String getCorreo() {
        return correo;
    }

    public void setCorreo(String correo) {
        this.correo = correo;
    }

    public int getConfirmacion() {
        return confirmacion;
    }

    public void setConfirmacion(int confirmacion) {
        this.confirmacion = confirmacion;
    }
     
     
     
     
    
}
