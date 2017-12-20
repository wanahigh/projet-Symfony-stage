<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f5de655ec9b716f973a6c72cc00ee386b00c59de52a752d52522d8dcd429a9d extends Twig_Template
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
        $__internal_82b3442b44d65a725a8100454571717c95343ff54b9d3fb011214a06b1cd6e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b3442b44d65a725a8100454571717c95343ff54b9d3fb011214a06b1cd6e7a->enter($__internal_82b3442b44d65a725a8100454571717c95343ff54b9d3fb011214a06b1cd6e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b9ec492126454e0ddea78817f0a1c03a034596e69413e678d578d072cba4c862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ec492126454e0ddea78817f0a1c03a034596e69413e678d578d072cba4c862->enter($__internal_b9ec492126454e0ddea78817f0a1c03a034596e69413e678d578d072cba4c862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_82b3442b44d65a725a8100454571717c95343ff54b9d3fb011214a06b1cd6e7a->leave($__internal_82b3442b44d65a725a8100454571717c95343ff54b9d3fb011214a06b1cd6e7a_prof);

        
        $__internal_b9ec492126454e0ddea78817f0a1c03a034596e69413e678d578d072cba4c862->leave($__internal_b9ec492126454e0ddea78817f0a1c03a034596e69413e678d578d072cba4c862_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
