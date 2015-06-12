<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Usuários</h3>
				<div class="box-tools">
					<div class="input-group" style="width: 150px;">
						<?php echo $this->Form->input('table_search', array('label' => false, 'type' => 'text', 'class' => 'form-control input-sm pull-right', 'placeholder' => 'Proccurar')); ?>
						<div class="input-group-btn">
							<button class="btn btn-sm btn-default">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</div>
				</div>
			</div><!-- /.box-header -->
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover">
					<tbody>	
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Situação</th>
							<th></th>
							<th></th>
						</tr>
						<?php
						foreach ($arrayUsers as $user) {
							?>
							<tr>
								<td><?php echo $user['User']['nome']; ?></td>
								<td><?php echo $user['User']['email']; ?></td>
								<td><?php echo($user['User']['situacao']) ? 'Ativado' : 'Desativado'; ?></td>
								<td><?php echo $this -> Html -> link('Editar', '/Users/editar/' . $user['User']['id'], array('class' => 'button', 'target' => '_blank')); ?></td>
								<td><?php echo $this -> Html -> link('x', '/Users/deletar/' . $user['User']['id']); ?></td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
</div>

<?php echo $this->Html->link('Novo', '/Users/adicionar/', array('class' => 'btn btn-primary btn-sm pull-left')); ?>


