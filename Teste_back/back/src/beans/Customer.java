package beans;

public class Customer {
	private int id;
	private int cpf_cnpj;
	private String nome;
	private String active;
	private float saldo;

	public Customer() {
		super();
	}

	public Customer(int id, int cpf_cnpj, String nome, String active, float saldo) {
		super();
		this.id = id;
		this.cpf_cnpj = cpf_cnpj;
		this.nome = nome;
		this.active = active;
		this.saldo = saldo;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getCpf_cnpj() {
		return cpf_cnpj;
	}

	public void setCpf_cnpj(int cpf_cnpj) {
		this.cpf_cnpj = cpf_cnpj;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getActive() {
		return active;
	}

	public void setActive(String active) {
		this.active = active;
	}

	public float getSaldo() {
		return saldo;
	}

	public void setSaldo(float saldo) {
		this.saldo = saldo;
	}

}