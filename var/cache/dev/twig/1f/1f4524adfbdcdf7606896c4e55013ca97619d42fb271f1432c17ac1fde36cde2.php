<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b6988ad80a222065d115429cf688af6004776c007220188524c878efd68d1d14 extends Twig_Template
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
        $__internal_4fb633891dde1a22cee67129315fb6e118ab0c961af15b20ad4486400a5a5e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb633891dde1a22cee67129315fb6e118ab0c961af15b20ad4486400a5a5e4e->enter($__internal_4fb633891dde1a22cee67129315fb6e118ab0c961af15b20ad4486400a5a5e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d959d15e7f680d3b4c48d17a5516bdc5d0e7309aaa6a2d26c97cc1bbbfb09077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d959d15e7f680d3b4c48d17a5516bdc5d0e7309aaa6a2d26c97cc1bbbfb09077->enter($__internal_d959d15e7f680d3b4c48d17a5516bdc5d0e7309aaa6a2d26c97cc1bbbfb09077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4fb633891dde1a22cee67129315fb6e118ab0c961af15b20ad4486400a5a5e4e->leave($__internal_4fb633891dde1a22cee67129315fb6e118ab0c961af15b20ad4486400a5a5e4e_prof);

        
        $__internal_d959d15e7f680d3b4c48d17a5516bdc5d0e7309aaa6a2d26c97cc1bbbfb09077->leave($__internal_d959d15e7f680d3b4c48d17a5516bdc5d0e7309aaa6a2d26c97cc1bbbfb09077_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
