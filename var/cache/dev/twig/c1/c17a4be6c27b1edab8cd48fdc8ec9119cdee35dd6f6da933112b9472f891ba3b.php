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
        $__internal_ff0bb604a2c685981e8a1b56a2fb92fedbb002b1fc8191227420b50b09c67574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0bb604a2c685981e8a1b56a2fb92fedbb002b1fc8191227420b50b09c67574->enter($__internal_ff0bb604a2c685981e8a1b56a2fb92fedbb002b1fc8191227420b50b09c67574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_94cfb5ecc5f283b2ac4e7f60ebfb4458a4388190e12962701c46f6045c8ea33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cfb5ecc5f283b2ac4e7f60ebfb4458a4388190e12962701c46f6045c8ea33e->enter($__internal_94cfb5ecc5f283b2ac4e7f60ebfb4458a4388190e12962701c46f6045c8ea33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ff0bb604a2c685981e8a1b56a2fb92fedbb002b1fc8191227420b50b09c67574->leave($__internal_ff0bb604a2c685981e8a1b56a2fb92fedbb002b1fc8191227420b50b09c67574_prof);

        
        $__internal_94cfb5ecc5f283b2ac4e7f60ebfb4458a4388190e12962701c46f6045c8ea33e->leave($__internal_94cfb5ecc5f283b2ac4e7f60ebfb4458a4388190e12962701c46f6045c8ea33e_prof);

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
