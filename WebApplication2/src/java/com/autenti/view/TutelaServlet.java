/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.autenti.view;

import java.io.File;
import java.io.IOException;
import java.io.InputStream;
import java.io.PrintWriter;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.nio.file.StandardOpenOption;
import java.util.Scanner;
import javax.faces.application.FacesMessage;
import javax.faces.component.UIComponent;
import javax.faces.context.FacesContext;
import javax.faces.validator.ValidatorException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.Part;

/**
 *
 * @author ivanf
 */
@WebServlet("/CrearSession")
public class TutelaServlet extends HttpServlet {

   
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
           
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

    
    
    private Part file; // +getter+setter

	public void save() {
		try (InputStream input = file.getInputStream()) {
			Files.copy(input, new File(file.getContentType(), file.getSubmittedFileName()).toPath());
		}
		catch (IOException e) {
			System.out.println(e);
		}
	}

	public void upload() {
		System.out.println("esta entrando el boton");
		try{
			Scanner s = new Scanner(file.getInputStream());
			String fileContent = s.useDelimiter("\\A").next();
			s.close();

			System.out.println(fileContent);

			Files.write(Paths.get("C:\\"+file.getSubmittedFileName()), fileContent.getBytes(), StandardOpenOption.CREATE);
		}catch (IOException e){

			System.out.println(e);
		}

	}
	
	public void validate(FacesContext context, UIComponent component, Object value) {
		System.out.println("esta entrando el boton");
		Part file = (Part) value;
		if (file.getSize() > 11) {
			throw new ValidatorException(new FacesMessage("File is too large"));
		}
		if (!file.getContentType().equals("text/plain")) 
			throw new ValidatorException(new FacesMessage("File is not a text file"));
	}
	
	public Part getFile() {
		return file;
	}

	public void setFile(Part file) {
		this.file = file;
	}
}
