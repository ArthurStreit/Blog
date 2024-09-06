<div class="articles form">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Adicionar Artigo') ?></legend>
        <?= $this->Form->control('title', ['label' => 'Título']) ?>
        <?= $this->Form->control('body', ['label' => 'Conteúdo']) ?>
        <?= $this->Form->control('category_id', [
            'label' => 'Categoria',
            'options' => $categories
        ]) ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar Artigo')) ?>
    <?= $this->Form->end() ?>
</div>
