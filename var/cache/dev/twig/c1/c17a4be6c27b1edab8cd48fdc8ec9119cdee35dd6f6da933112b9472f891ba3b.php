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
        $__internal_433da8daec3f2914f31df01a99ce35b18fe7b9b3712ea5d7623579faba69ab4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433da8daec3f2914f31df01a99ce35b18fe7b9b3712ea5d7623579faba69ab4b->enter($__internal_433da8daec3f2914f31df01a99ce35b18fe7b9b3712ea5d7623579faba69ab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a1017d553f3ec521aa7f08fae926b5ffeb5ff9a7f15f44f05fb2e522edbd7173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1017d553f3ec521aa7f08fae926b5ffeb5ff9a7f15f44f05fb2e522edbd7173->enter($__internal_a1017d553f3ec521aa7f08fae926b5ffeb5ff9a7f15f44f05fb2e522edbd7173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_433da8daec3f2914f31df01a99ce35b18fe7b9b3712ea5d7623579faba69ab4b->leave($__internal_433da8daec3f2914f31df01a99ce35b18fe7b9b3712ea5d7623579faba69ab4b_prof);

        
        $__internal_a1017d553f3ec521aa7f08fae926b5ffeb5ff9a7f15f44f05fb2e522edbd7173->leave($__internal_a1017d553f3ec521aa7f08fae926b5ffeb5ff9a7f15f44f05fb2e522edbd7173_prof);

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
