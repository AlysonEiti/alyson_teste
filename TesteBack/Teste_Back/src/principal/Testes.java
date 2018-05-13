package principal;

import javax.swing.JOptionPane;

import beans.Customer;
import bo.CustomerBO;
import excecao.Excecao;

public class Testes {

	public static void main(String[] args) {
		int escolha = 0;
		Customer c = null;
		
		try{
			
			do{
				
				System.out.println("\n");
				System.out.println("Esolha uma opção:");
				System.out.println("1) Inserir customer");
				System.out.println("2) Exibir e calcular média dos customer com ID entre 1500 e 2700 e saldo acima de 560");
				System.out.println("3) Fechar");
				escolha = Integer.parseInt(JOptionPane.showInputDialog("Escolher "));
				
				switch(escolha) {
				
				case 1:
					c = new Customer();
					c.setId(Integer.parseInt(JOptionPane.showInputDialog("ID_CUSTOMER: ")));
					c.setCpf_cnpj(Integer.parseInt(JOptionPane.showInputDialog("CPF/CNPJ: ")));
					c.setNome(JOptionPane.showInputDialog("NM_CUSTOMER: "));
					c.setSaldo(Float.parseFloat(JOptionPane.showInputDialog("VL_TOTAL: ")));
					c.setActive("TRUE");
					System.out.println(CustomerBO.novoCustomer(c));
					break;
				
				case 2:
					System.out.println(CustomerBO.getAll());
					break;
					
				case 3:
					System.out.println("Fechando...");
					break;
					
				default:
					System.out.println("Opção inválida!");
					break;
				
				} 
				
			}while(escolha != 3);
			
		}catch(Exception e){
//  		e.printStackTrace();
			System.out.println(Excecao.tratarExcecao(e));
			
		}

	}

}