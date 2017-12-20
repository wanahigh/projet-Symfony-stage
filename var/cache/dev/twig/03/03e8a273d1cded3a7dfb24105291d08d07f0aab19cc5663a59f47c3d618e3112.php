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
        $__internal_f7b3681d048160df3b1d535d80d520b4615e371724ab3d0550a71955dff39871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b3681d048160df3b1d535d80d520b4615e371724ab3d0550a71955dff39871->enter($__internal_f7b3681d048160df3b1d535d80d520b4615e371724ab3d0550a71955dff39871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_381c9f895f89da03d9747d6f50ffd642cba057150785d28f0cbb385387c3444e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381c9f895f89da03d9747d6f50ffd642cba057150785d28f0cbb385387c3444e->enter($__internal_381c9f895f89da03d9747d6f50ffd642cba057150785d28f0cbb385387c3444e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f7b3681d048160df3b1d535d80d520b4615e371724ab3d0550a71955dff39871->leave($__internal_f7b3681d048160df3b1d535d80d520b4615e371724ab3d0550a71955dff39871_prof);

        
        $__internal_381c9f895f89da03d9747d6f50ffd642cba057150785d28f0cbb385387c3444e->leave($__internal_381c9f895f89da03d9747d6f50ffd642cba057150785d28f0cbb385387c3444e_prof);

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
