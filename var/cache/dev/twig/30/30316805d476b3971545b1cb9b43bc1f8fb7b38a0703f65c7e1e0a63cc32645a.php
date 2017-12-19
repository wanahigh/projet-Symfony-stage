<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb70bc6eca82c333dfbd999d063010847510bbd37c5cacd51064d85a161254e0 extends Twig_Template
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
        $__internal_95930d4a6ef44371ab26672e042d8481485f411c0d56fb27a6bed24fa3d6c1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95930d4a6ef44371ab26672e042d8481485f411c0d56fb27a6bed24fa3d6c1d1->enter($__internal_95930d4a6ef44371ab26672e042d8481485f411c0d56fb27a6bed24fa3d6c1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d27ff72178d5720914fca19de54c49683d5f1fdd13310d8028948e8f0d258444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27ff72178d5720914fca19de54c49683d5f1fdd13310d8028948e8f0d258444->enter($__internal_d27ff72178d5720914fca19de54c49683d5f1fdd13310d8028948e8f0d258444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_95930d4a6ef44371ab26672e042d8481485f411c0d56fb27a6bed24fa3d6c1d1->leave($__internal_95930d4a6ef44371ab26672e042d8481485f411c0d56fb27a6bed24fa3d6c1d1_prof);

        
        $__internal_d27ff72178d5720914fca19de54c49683d5f1fdd13310d8028948e8f0d258444->leave($__internal_d27ff72178d5720914fca19de54c49683d5f1fdd13310d8028948e8f0d258444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
