/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package conexion_remedial;

import com.mysql.jdbc.Connection;
import com.mysql.jdbc.Statement;
import java.sql.DriverManager;
import java.sql.*;


/**
 *
 * @author luis_
 */
public class Conexion_Remedial {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        String dbHost;
        String dbName;
        String dbUser;
        String dbPassword;
        
        //Usando DBC, Data Base Connection
  
            
        try {
         //1 Cargar Driver
        Class.forName("com.mysql.jdbc.Driver");
         
         //2 Definicion de variables (Parametros)
         //Se define el driver con el que se trabaja asi como el puerto y la base de datos
         dbHost="jdbc:mysql://127.0.0.1:3306/";
         dbName="punto_venta";
         dbUser="root";
         dbPassword="luis2139331.";
        
         // 3 Estableciendo la conexion con los parametros
        Connection db = (Connection) DriverManager.getConnection(dbHost + dbName,dbUser,dbPassword);
        
        // Sentencia que vamos a ejecutar
        Statement st = (Statement) db.createStatement();
        
        // Objeto tipo tabla
        ResultSet rs = st.executeQuery("SELECT * FROM productos");
        
        // Gestionamos nuestro resultado con un if
        
        if (rs.wasNull()) {
            System.out.println("No existen registros");
        }
        
        // while para imprimir registros
        while (rs.next()){
            System.out.println(rs.getString("SECCION")+ " " + rs.getString("NOMBREARTICULO") + "" + rs.getString("PRECIO"));
        }
        
        st.close();
        rs.close();
        db.close();
        
        }
        catch ( ClassNotFoundException | SQLException e) {
            System.out.println("Problema con la conexion a la Base de Datos"+e);
                
        }
    
    
    
    }
    
    
}
