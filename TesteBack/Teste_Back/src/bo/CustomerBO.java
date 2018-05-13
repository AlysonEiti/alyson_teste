package bo;

import beans.Customer;
import dao.CustomerDAO;

public class CustomerBO {
	
	public static String novoCustomer(Customer c) throws Exception{
		if (c.getId() < 1){
			return "ID inv�lido!";
		}
		
		if (c.getActive().toUpperCase() != "TRUE" ){
			return "N�o ativo!";
		}
		
		c.setNome(c.getNome().toUpperCase());
		
		CustomerDAO dao = new CustomerDAO();
		String msg = dao.inserir(c);
		dao.fecharConexao();
		
		return msg;
	}
	
	public static String getAll() throws Exception{
		
		CustomerDAO dao = new CustomerDAO();
		String msg = dao.getAll();
		dao.fecharConexao();
		
		return msg;
	}

}