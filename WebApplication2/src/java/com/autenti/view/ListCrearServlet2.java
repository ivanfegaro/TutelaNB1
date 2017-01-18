/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.autenti.view;

import com.autentic.entities.datosUsuario;
import com.autentic.model.ConexionSinglenton;
import com.google.gson.Gson;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.io.PrintWriter;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.*;
import java.util.ArrayList;
import java.util.Properties;
import java.util.Random;
import javax.mail.Message;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import net.sf.jasperreports.engine.JRException;
import net.sf.jasperreports.engine.JasperExportManager;
import net.sf.jasperreports.engine.JasperFillManager;
import net.sf.jasperreports.engine.JasperPrint;
import net.sf.jasperreports.engine.JasperReport;
import net.sf.jasperreports.engine.util.JRLoader;
import net.sf.jasperreports.view.JasperViewer;


public class ListCrearServlet2 extends HttpServlet {
    
    private static final long serialVersionUID = 1L;
    public String aleatorio;
    public String correo;
    public boolean validacion = false;
    
    protected void doget(HttpServletRequest request, HttpServletResponse response){
       HttpSession misession= request.getSession(true); 
         
    }
    
    public void CreateUser(String alias,String cedula,String email, String pass) throws ClassNotFoundException, SQLException{
        
        String sql = "Insert into usuarion (alias_usuario,password_usuario,estado_usuario,numero_identificacion,correo,codigo_confirmacion) VALUES (?,?,?,?,?,?)";
        PreparedStatement ps = ConexionSinglenton.openConection().prepareCall(sql);
        ps.setString(1, alias);
        ps.setString(2, pass);
        ps.setString(3, "P");
        ps.setString(4, cedula);
        ps.setString(5, email);
        ps.setString(6, aleatorio);
        ps.execute();
        validacion = true;
    }
    

    protected void processRequest(HttpServletRequest request, HttpServletResponse response) 
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        try  {
            correo = request.getParameter("corr");
           this.enviarCorreo();
            CreateUser(request.getParameter("nom"),
                    request.getParameter("doc"),
                    request.getParameter("corr"),
                    request.getParameter("pass")
                    );
            if (validacion == true){
                out.println("registro exitoso");
            }else {
                out.println("error");
            }
            
            
        }catch(Exception e){
            
            e.printStackTrace();
 
        }
    }
    
    public void enviarCorreo(){
        
        //metodo para enviar correo utiliza libreria javax.mail 1.4.3
        try{
            Random rnd = new Random();
            int dig5 = rnd.nextInt(90000)+10000;
            aleatorio = String.valueOf(dig5);

            String host ="smtp.gmail.com" ;
            String user = "ivanfegaro@gmail.com";
            String pass = "fnwrsnxgjxadllbj";
            String to = correo;
            String from = "ivanfegaro@gmail.com";
            String subject = "Clave de confirmacion";
            String messageText = "Por favor inserte este codigo para activar su Cuenta:" + aleatorio;
            boolean sessionDebug = false;

            Properties props = System.getProperties();

            props.put("mail.smtp.starttls.enable", "true");
            props.put("mail.smtp.host", host);
            props.put("mail.smtp.port", "587");
            props.put("mail.smtp.auth", "true");
            props.put("mail.smtp.starttls.required", "true");

            java.security.Security.addProvider(new com.sun.net.ssl.internal.ssl.Provider());
            Session mailSession = Session.getDefaultInstance(props, null);
            mailSession.setDebug(sessionDebug);
            Message msg = new MimeMessage(mailSession);
            msg.setFrom(new InternetAddress(from));
            InternetAddress[] address = {new InternetAddress(to)};
            msg.setRecipients(Message.RecipientType.TO, address);
            msg.setSubject(subject); msg.setSentDate(new java.util.Date());
            msg.setText(messageText);

            Transport transport=mailSession.getTransport("smtp");
            transport.connect(host, user, pass);
            transport.sendMessage(msg, msg.getAllRecipients());
            transport.close();
            System.out.println("message send successfully" + correo);
        }catch(Exception ex)
        {
            System.out.println(ex);
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
        processRequest(request, response);
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
        processRequest(request, response);
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

    
    
         public void ReportePDF() throws SQLException, JRException{
        Connection a;
        a=DriverManager.getConnection("jdbc:mysql://localhost/tutela", "root","root");
        JasperReport reporte = null;
        reporte = (JasperReport) JRLoader.loadObjectFromFile("C:\\Users\\ivanf\\Documents\\NetBeansProjects\\tutelaNB\\PDF\\src\\main\\java\\reporte\\reporte\\report2.jasper");
        JasperPrint print = JasperFillManager.fillReport(reporte, null, a);
        JasperViewer ver = new JasperViewer(print);
        ver.setTitle("Tutela");
        ver.setVisible(true);

        try{
            
            OutputStream output = new FileOutputStream(new File("C:\\Users\\ivanf\\Documents\\NetBeansProjects\\tutelaNB\\PDF\\tutela.pdf"));
            JasperExportManager.exportReportToPdfStream(print, output);
            
        }catch(IOException e){
            e.printStackTrace();
        }
        
    }

    public String getAleatorio() {
        return aleatorio;
    }

    public void setAleatorio(String aleatorio) {
        this.aleatorio = aleatorio;
    }

    public String getCorreo() {
        return correo;
    }

    public void setCorreo(String correo) {
        this.correo = correo;
    }
    
    
         
         
}
