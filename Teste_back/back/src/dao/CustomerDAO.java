package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import beans.Customer;
import conexao.ConexaoFactory;

public class CustomerDAO {
	private Connection con;
	
	public CustomerDAO() throws Exception{
		con = new ConexaoFactory().conectar();
	}
	
	public void fecharConexao() throws Exception{
		con.close();
	}
	
	public String inserir(Customer c) throws Exception{
		PreparedStatement estrutura = con.prepareStatement("INSERT INTO TB_CUSTOMER_ACCOUNT(ID_CUSTOMER, CPF_CNPJ, NM_CUSTOMER, VL_TOTAL, IS_ACTIVE) "
				+ "VALUES(?,?,?,?,?)");
		estrutura.setInt(1, c.getId());
		estrutura.setInt(2, c.getCpf_cnpj());
		estrutura.setString(3, c.getNome());
		estrutura.setFloat(4, c.getSaldo());
		estrutura.setString(5, c.getActive());
		estrutura.executeUpdate();
		estrutura.close();
		
		return "Customer adicionado!";
	}
	
	public String getAll() throws Exception{
		float media = 0;
		int contador = 0;
		Customer c = null;
		PreparedStatement estrutura = con.prepareStatement("SELECT * FROM TB_CUSTOMER_ACCOUNT WHERE ID_CUSTOMER BETWEEN 1500 AND 2700 "
				+ "AND VL_TOTAL > 560 ORDER BY VL_TOTAL DESC");
		ResultSet rs = estrutura.executeQuery();
		while(rs.next()){
			c = new Customer();
			c.setId(rs.getInt("ID_CUSTOMER"));
			c.setCpf_cnpj(rs.getInt("CPF_CNPJ"));
			c.setNome(rs.getString("NM_CUSTOMER"));
			c.setSaldo(rs.getFloat("VL_TOTAL"));
			c.setActive(rs.getString("IS_ACTIVE"));
			
			media += c.getSaldo();
			System.out.println("ID: " + c.getId() + "\t Nome: " + c.getNome() + "\t CPF_CNPJ: " + c.getCpf_cnpj()  +"\t Saldo: " + c.getSaldo() + "\t Status: " + c.getActive());
			contador ++;
		}
		
		media /= contador;
		estrutura.close();
		rs.close();
		return "\nMédia dos saldos é " + media;
	}
	
	
	}
