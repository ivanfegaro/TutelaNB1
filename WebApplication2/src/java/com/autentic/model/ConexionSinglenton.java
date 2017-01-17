/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.autentic.model;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author ivanf
 */
public class ConexionSinglenton {
    
    private static Connection conn;
    
    private static String driver = "com.mysql.jdbc.Driver"; 
    private static String url = "jdbc:mysql://localhost/tutela";
    private static String user = "root";
    private static String pwsd = "root";

    public ConexionSinglenton() {
    }
    
    public static Connection openConection() throws ClassNotFoundException, SQLException{
        
        if (conn == null){
            Class.forName(driver);
            conn = DriverManager.getConnection(url, user, pwsd);
            
        }
        
        return conn;
    }
    
    
    
}
