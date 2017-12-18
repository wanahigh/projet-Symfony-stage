<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c41015bd356336e1d51cc7fc6517077d2a25a1cd036a98a187e57101a5b17586 extends Twig_Template
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
        $__internal_3d5002c3a3b32bd4d4dc1040a1853f339ce61b70947c7d51acb0bb9b8c055e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5002c3a3b32bd4d4dc1040a1853f339ce61b70947c7d51acb0bb9b8c055e58->enter($__internal_3d5002c3a3b32bd4d4dc1040a1853f339ce61b70947c7d51acb0bb9b8c055e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fff38a3e5b9e8f14698936d2df9271ef01986b4186935ab4f7bccaf16f4e7a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff38a3e5b9e8f14698936d2df9271ef01986b4186935ab4f7bccaf16f4e7a44->enter($__internal_fff38a3e5b9e8f14698936d2df9271ef01986b4186935ab4f7bccaf16f4e7a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3d5002c3a3b32bd4d4dc1040a1853f339ce61b70947c7d51acb0bb9b8c055e58->leave($__internal_3d5002c3a3b32bd4d4dc1040a1853f339ce61b70947c7d51acb0bb9b8c055e58_prof);

        
        $__internal_fff38a3e5b9e8f14698936d2df9271ef01986b4186935ab4f7bccaf16f4e7a44->leave($__internal_fff38a3e5b9e8f14698936d2df9271ef01986b4186935ab4f7bccaf16f4e7a44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
