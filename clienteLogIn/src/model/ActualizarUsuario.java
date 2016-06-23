/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package model;

/**
 *
 * @author LAB-315
 */
public class ActualizarUsuario {
    private String url;
    
   public ActualizarUsuario(String server, int id, String adminName, String adminPss, String userName, String userPass) {
       this.url=server+"?user="+adminName+"&pass="+adminPss+"&id="+id+"&u="+userName+"&p="+userPass;
//        this.url = server+"?id="+id+"&user="+user+"&pass="+pass;
        //http://10.52.7.1/grupo_a/actualizarUsuario.php?
        //user=chaos&pass=654321&id=2&u=German&p=9876541
    }

    public String getUrl() {
        return url;
    }
   
   
    
}
