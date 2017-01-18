/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.autenti.view;

import com.autentic.entities.Usuario;
import com.autentic.model.ConexionSinglenton;
import com.google.gson.Gson;
import java.io.IOException;
import java.io.PrintWriter;
import static java.lang.System.out;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author ivanf
 */
public class IngresoUsuariosServlet extends HttpServlet {
    private static final long serialVersionUID = 1L;
    int numRows = 0;
    ArrayList<Usuario> arrayDatos  = new ArrayList<>();

    public void ingresar(String user, String pass) throws ClassNotFoundException, SQLException{
        //String sql = "SELECT * FROM tutela.usuarion where alias_usuario = 'ivan.garcia' and password_usuario = '1234' and estado_usuario = 'A';";
        String sql = "SELECT * FROM tutela.usuarion where alias_usuario = '"+ user + "' and password_usuario = '"+ pass + "' and estado_usuario = 'A';";
        Statement st = ConexionSinglenton.openConection().createStatement();
         ResultSet rs =  st.executeQuery(sql);

          rs.last();
          numRows = rs.getRow();
          rs.beforeFirst();
          out.print(numRows);
         
          while (rs.next()){
            arrayDatos.add(new Usuario(rs.getInt("id"), rs.getString("alias_usuario"), rs.getString("password_usuario"),
                  rs.getString("estado_usuario"), rs.getString("nombre_usuario"), rs.getString("apellido_usuario"),rs.getString("numero_identificacion"), rs.getString("direccion"), rs.getInt("celular"), rs.getString("correo"), rs.getString("codigo_confirmacion")));
    }
          
        //  return new Gson().toJson(arrayDatos); 
          
    }
    

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException, ClassNotFoundException, SQLException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
         // HttpSession misession= request.getSession(true);
         // misession.setAttribute("usuario", arrayDatos);
          
            ingresar(request.getParameter("user"),request.getParameter("pass"));
            if (numRows == 0){
               out.println("Datos Erroneos");
           }else {
               out.println("Ingreso correctamente");
           }
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            processRequest(request, response);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(IngresoUsuariosServlet.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(IngresoUsuariosServlet.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        try {
            processRequest(request, response);
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(IngresoUsuariosServlet.class.getName()).log(Level.SEVERE, null, ex);
        } catch (SQLException ex) {
            Logger.getLogger(IngresoUsuariosServlet.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
