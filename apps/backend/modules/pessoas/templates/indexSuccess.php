<h1>Clientes List</h1>

<table>
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nome</th>
      <th>Endereco</th>
      <th>Bairro</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>Cep</th>
      <th>Transversalinicial</th>
      <th>Transversalfinal</th>
      <th>Telefone</th>
      <th>Contato</th>
      <th>Fax</th>
      <th>Email</th>
      <th>Pessoafisica</th>
      <th>Cgc</th>
      <th>Ie</th>
      <th>Cpf</th>
      <th>Profissao</th>
      <th>Datanascimento</th>
      <th>Rg</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clientes as $cliente): ?>
    <tr>
      <td><a href="<?php echo url_for('pessoas/edit?codigo='.$cliente->getCodigo()) ?>"><?php echo $cliente->getCodigo() ?></a></td>
      <td><?php echo $cliente->getNome() ?></td>
      <td><?php echo $cliente->getEndereco() ?></td>
      <td><?php echo $cliente->getBairro() ?></td>
      <td><?php echo $cliente->getCidade() ?></td>
      <td><?php echo $cliente->getEstado() ?></td>
      <td><?php echo $cliente->getCep() ?></td>
      <td><?php echo $cliente->getTransversalinicial() ?></td>
      <td><?php echo $cliente->getTransversalfinal() ?></td>
      <td><?php echo $cliente->getTelefone() ?></td>
      <td><?php echo $cliente->getContato() ?></td>
      <td><?php echo $cliente->getFax() ?></td>
      <td><?php echo $cliente->getEmail() ?></td>
      <td><?php echo $cliente->getPessoafisica() ?></td>
      <td><?php echo $cliente->getCgc() ?></td>
      <td><?php echo $cliente->getIe() ?></td>
      <td><?php echo $cliente->getCpf() ?></td>
      <td><?php echo $cliente->getProfissao() ?></td>
      <td><?php echo $cliente->getDatanascimento() ?></td>
      <td><?php echo $cliente->getRg() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pessoas/new') ?>">New</a>
