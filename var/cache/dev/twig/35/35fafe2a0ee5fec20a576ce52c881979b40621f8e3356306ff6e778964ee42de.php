<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f201cdf592b498c12e41792fe00aa871f3de79d7aa76f9c9288f078c87864df8 extends Twig_Template
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
        $__internal_23a659964dedb6c6759659905fd1aae9bbe6b690cc3697e56250b5fe6c75e8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a659964dedb6c6759659905fd1aae9bbe6b690cc3697e56250b5fe6c75e8b1->enter($__internal_23a659964dedb6c6759659905fd1aae9bbe6b690cc3697e56250b5fe6c75e8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_92aa1be30201e8f9f24c657fbd95807fc519a7847e4d6c80d013dcc288ea9057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92aa1be30201e8f9f24c657fbd95807fc519a7847e4d6c80d013dcc288ea9057->enter($__internal_92aa1be30201e8f9f24c657fbd95807fc519a7847e4d6c80d013dcc288ea9057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_23a659964dedb6c6759659905fd1aae9bbe6b690cc3697e56250b5fe6c75e8b1->leave($__internal_23a659964dedb6c6759659905fd1aae9bbe6b690cc3697e56250b5fe6c75e8b1_prof);

        
        $__internal_92aa1be30201e8f9f24c657fbd95807fc519a7847e4d6c80d013dcc288ea9057->leave($__internal_92aa1be30201e8f9f24c657fbd95807fc519a7847e4d6c80d013dcc288ea9057_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
