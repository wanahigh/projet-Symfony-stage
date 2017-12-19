<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3d6480a69a1f7ee07170ce8c0de343fbb0d2186fce2a8edd6c0151c1cbcf8114 extends Twig_Template
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
        $__internal_2e6ee3b625a4268c70e0532df52bd6037b6dfb22d5f858ea3cd5a5260448d457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6ee3b625a4268c70e0532df52bd6037b6dfb22d5f858ea3cd5a5260448d457->enter($__internal_2e6ee3b625a4268c70e0532df52bd6037b6dfb22d5f858ea3cd5a5260448d457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_35ac9f324791131494e75d4b7dd24194976343f7607ea0c54a29b20095397ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ac9f324791131494e75d4b7dd24194976343f7607ea0c54a29b20095397ec3->enter($__internal_35ac9f324791131494e75d4b7dd24194976343f7607ea0c54a29b20095397ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2e6ee3b625a4268c70e0532df52bd6037b6dfb22d5f858ea3cd5a5260448d457->leave($__internal_2e6ee3b625a4268c70e0532df52bd6037b6dfb22d5f858ea3cd5a5260448d457_prof);

        
        $__internal_35ac9f324791131494e75d4b7dd24194976343f7607ea0c54a29b20095397ec3->leave($__internal_35ac9f324791131494e75d4b7dd24194976343f7607ea0c54a29b20095397ec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
