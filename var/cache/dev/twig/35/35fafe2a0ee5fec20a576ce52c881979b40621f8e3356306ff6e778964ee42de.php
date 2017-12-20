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
        $__internal_78936dd846b880e86b383f19997537791eca4f13a9534eba09426a56371bce99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78936dd846b880e86b383f19997537791eca4f13a9534eba09426a56371bce99->enter($__internal_78936dd846b880e86b383f19997537791eca4f13a9534eba09426a56371bce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ff82db00c0f5f6994807ad4fd81d139a1892de8078a69c19b8347a764563ddcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff82db00c0f5f6994807ad4fd81d139a1892de8078a69c19b8347a764563ddcd->enter($__internal_ff82db00c0f5f6994807ad4fd81d139a1892de8078a69c19b8347a764563ddcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_78936dd846b880e86b383f19997537791eca4f13a9534eba09426a56371bce99->leave($__internal_78936dd846b880e86b383f19997537791eca4f13a9534eba09426a56371bce99_prof);

        
        $__internal_ff82db00c0f5f6994807ad4fd81d139a1892de8078a69c19b8347a764563ddcd->leave($__internal_ff82db00c0f5f6994807ad4fd81d139a1892de8078a69c19b8347a764563ddcd_prof);

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
