<div class="attachments form">
    <h2><?php echo $title_for_layout; ?></h2>
    <?php
        $formUrl = array('controller' => 'attachments', 'action' => 'add');
        if (isset($this->params['named']['editor'])) {
            $formUrl['editor'] = 1;
        }
    
        echo $this->Form->create('Node', array('url' => $formUrl, 'type' => 'file'));
    ?>
    <fieldset>
    <?php
      
 echo $this->Form->input('Node.title');
 //echo $this->Form->input('Node.body',array('label' => __('Description', true)));
 echo $this->Form->input('Node.file', array('label' => __('Upload', true), 'type' => 'file',));
echo $this->Form->input('Node.company_profile');
    ?>
    </fieldset>

    <div class="buttons">
    <?php
        echo $this->Form->end(__('Save', true));
        echo $this->Html->link(__('Cancel', true), array(
            'action' => 'index',
        ), array(
            'class' => 'cancel',
        ));
    ?>
    </div>
</div>
