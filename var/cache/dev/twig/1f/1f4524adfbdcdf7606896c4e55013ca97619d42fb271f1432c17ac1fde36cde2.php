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
        $__internal_833fa42c1cc4ec950bb125238ebd73d71a50665ea9572bf845569258f906835b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833fa42c1cc4ec950bb125238ebd73d71a50665ea9572bf845569258f906835b->enter($__internal_833fa42c1cc4ec950bb125238ebd73d71a50665ea9572bf845569258f906835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_56c7904d93f7e7df313d4e58d160fdafbda889afd0731d7239ffbe5247e65963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c7904d93f7e7df313d4e58d160fdafbda889afd0731d7239ffbe5247e65963->enter($__internal_56c7904d93f7e7df313d4e58d160fdafbda889afd0731d7239ffbe5247e65963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_833fa42c1cc4ec950bb125238ebd73d71a50665ea9572bf845569258f906835b->leave($__internal_833fa42c1cc4ec950bb125238ebd73d71a50665ea9572bf845569258f906835b_prof);

        
        $__internal_56c7904d93f7e7df313d4e58d160fdafbda889afd0731d7239ffbe5247e65963->leave($__internal_56c7904d93f7e7df313d4e58d160fdafbda889afd0731d7239ffbe5247e65963_prof);

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
