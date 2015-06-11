<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>Situação</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>	
		<?php
		foreach ($arrayUsers as $user) {
			?>
			<tr>
				<td><?php echo $user['User']['nome']; ?></td>
				<td><?php echo $user['User']['email']; ?></td>
				<td><?php echo ($user['User']['situacao']) ? 'Ativado' : 'Desativado'; ?></td>
				<td><?php echo $this->Html->link('Editar', '/Users/editar/'.$user['User']['id'], array('class' => 'button', 'target' => '_blank')); ?></td>
				<td><?php echo $this->Html->link('x', '/Users/deletar/'.$user['User']['id']); ?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<?php echo $this->Html->link('Novo', '/Users/adicionar/'); ?>