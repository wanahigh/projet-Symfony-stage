<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4ba636259aa58625e42626aded9d5e70dad2845ca36f5c4cdad59c70d048f3f1 extends Twig_Template
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
        $__internal_4fcfcffec3824d552f741485c290de3404157147062048b1c0d94a3434774c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcfcffec3824d552f741485c290de3404157147062048b1c0d94a3434774c4e->enter($__internal_4fcfcffec3824d552f741485c290de3404157147062048b1c0d94a3434774c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ebaf6f07ec57591af7e3a458e5785c780ce2e812cece50df2bfc795fc61080e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebaf6f07ec57591af7e3a458e5785c780ce2e812cece50df2bfc795fc61080e3->enter($__internal_ebaf6f07ec57591af7e3a458e5785c780ce2e812cece50df2bfc795fc61080e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4fcfcffec3824d552f741485c290de3404157147062048b1c0d94a3434774c4e->leave($__internal_4fcfcffec3824d552f741485c290de3404157147062048b1c0d94a3434774c4e_prof);

        
        $__internal_ebaf6f07ec57591af7e3a458e5785c780ce2e812cece50df2bfc795fc61080e3->leave($__internal_ebaf6f07ec57591af7e3a458e5785c780ce2e812cece50df2bfc795fc61080e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
