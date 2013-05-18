
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Html->link(__('Listar Pessoas Conta Correntes'), array('action' => 'index'), array('class'=>''));?></li>
        <li class='nav-header'><?php echo __('Pessoas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Pessoas'), array('controller' => 'pessoas', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Pessoa'), array('controller' => 'pessoas', 'action' => 'add'), array('class'=>'')); ?></li> 
        
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Incluir Pessoas Conta Corrente'); ?></h4>
    
            <div class="pessoasContaCorrentes form">
        <div class="form">
        <?php echo $this->Form->create('PessoasContaCorrente', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Pessoas Conta Corrente'); ?></h6>
        	<?php
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('banco');
		echo $this->Form->input('agencia');
		echo $this->Form->input('numero');
	?>
	    
	        <div class="">
              <input type="submit" class="btn" value="Enviar" id="submit" name="Enviar" />
              <input type="reset" class="btn" value="Limpar" id="reset" name="Limpar" />              
            </div>
	    
	    
        <?php echo $this->Form->end();?>
        </div>
        </div>
    
    
    </div>    
    
</div>







