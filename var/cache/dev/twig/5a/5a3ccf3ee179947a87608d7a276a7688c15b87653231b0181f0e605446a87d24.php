<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_4e52719f78efc86c7a7eed1c651dac270d14bfd7a0272dc872f3aeaa2aa28b9a extends Twig_Template
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
        $__internal_497c460da587d7182e16162a3308a9d88c7c3987fc0963329e69e3248e719121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497c460da587d7182e16162a3308a9d88c7c3987fc0963329e69e3248e719121->enter($__internal_497c460da587d7182e16162a3308a9d88c7c3987fc0963329e69e3248e719121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_33c470fa5cb333c53e1f69c342e3b91eeaf0af1f4273534ca562dc8aa028fc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c470fa5cb333c53e1f69c342e3b91eeaf0af1f4273534ca562dc8aa028fc9b->enter($__internal_33c470fa5cb333c53e1f69c342e3b91eeaf0af1f4273534ca562dc8aa028fc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_497c460da587d7182e16162a3308a9d88c7c3987fc0963329e69e3248e719121->leave($__internal_497c460da587d7182e16162a3308a9d88c7c3987fc0963329e69e3248e719121_prof);

        
        $__internal_33c470fa5cb333c53e1f69c342e3b91eeaf0af1f4273534ca562dc8aa028fc9b->leave($__internal_33c470fa5cb333c53e1f69c342e3b91eeaf0af1f4273534ca562dc8aa028fc9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
