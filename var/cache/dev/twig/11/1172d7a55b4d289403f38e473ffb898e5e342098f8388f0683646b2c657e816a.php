<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1dfef49ced178fcd7e9b20802ae33ed2e9761120896d10fb98487532b2e7ce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf4b46d7941f837099e72ed47fdb3143f72cbbcbf64e9b44c036af173304ac17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4b46d7941f837099e72ed47fdb3143f72cbbcbf64e9b44c036af173304ac17->enter($__internal_cf4b46d7941f837099e72ed47fdb3143f72cbbcbf64e9b44c036af173304ac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4d965806fe2d4b080b8b8ae029d6601562f869160a1301f7ee1da83f6b08aaf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d965806fe2d4b080b8b8ae029d6601562f869160a1301f7ee1da83f6b08aaf2->enter($__internal_4d965806fe2d4b080b8b8ae029d6601562f869160a1301f7ee1da83f6b08aaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_cf4b46d7941f837099e72ed47fdb3143f72cbbcbf64e9b44c036af173304ac17->leave($__internal_cf4b46d7941f837099e72ed47fdb3143f72cbbcbf64e9b44c036af173304ac17_prof);

        
        $__internal_4d965806fe2d4b080b8b8ae029d6601562f869160a1301f7ee1da83f6b08aaf2->leave($__internal_4d965806fe2d4b080b8b8ae029d6601562f869160a1301f7ee1da83f6b08aaf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
