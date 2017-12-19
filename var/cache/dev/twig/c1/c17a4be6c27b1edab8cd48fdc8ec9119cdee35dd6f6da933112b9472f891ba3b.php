<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8e2991bbff8e70d34881c8fbae6dcefd76e90ebbcf03559f2d2ec293a315ec44 extends Twig_Template
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
        $__internal_2f9ed4b62122c158246dcb505ec6cab17330021e761362f2a62e04f213ec3c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9ed4b62122c158246dcb505ec6cab17330021e761362f2a62e04f213ec3c9f->enter($__internal_2f9ed4b62122c158246dcb505ec6cab17330021e761362f2a62e04f213ec3c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bba376c218c4d3e417a1bfc5c8f8015d71c45980187d1ccf8f8aa7fb05dd4bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba376c218c4d3e417a1bfc5c8f8015d71c45980187d1ccf8f8aa7fb05dd4bfe->enter($__internal_bba376c218c4d3e417a1bfc5c8f8015d71c45980187d1ccf8f8aa7fb05dd4bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2f9ed4b62122c158246dcb505ec6cab17330021e761362f2a62e04f213ec3c9f->leave($__internal_2f9ed4b62122c158246dcb505ec6cab17330021e761362f2a62e04f213ec3c9f_prof);

        
        $__internal_bba376c218c4d3e417a1bfc5c8f8015d71c45980187d1ccf8f8aa7fb05dd4bfe->leave($__internal_bba376c218c4d3e417a1bfc5c8f8015d71c45980187d1ccf8f8aa7fb05dd4bfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
