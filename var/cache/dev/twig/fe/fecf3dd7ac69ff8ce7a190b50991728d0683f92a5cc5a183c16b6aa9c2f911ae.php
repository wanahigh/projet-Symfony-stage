<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2bce84114d955adafb80988aa6e6c11f4b07d5a44754459049f19bbf92a04438 extends Twig_Template
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
        $__internal_d87328992e3186f989776ce4af231a23262d8ea9f716114551188c1f62578019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87328992e3186f989776ce4af231a23262d8ea9f716114551188c1f62578019->enter($__internal_d87328992e3186f989776ce4af231a23262d8ea9f716114551188c1f62578019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_55d79366b9e2184e48b0bdbf5f959ce622bc4a913fdb726558b156ba757386df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d79366b9e2184e48b0bdbf5f959ce622bc4a913fdb726558b156ba757386df->enter($__internal_55d79366b9e2184e48b0bdbf5f959ce622bc4a913fdb726558b156ba757386df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d87328992e3186f989776ce4af231a23262d8ea9f716114551188c1f62578019->leave($__internal_d87328992e3186f989776ce4af231a23262d8ea9f716114551188c1f62578019_prof);

        
        $__internal_55d79366b9e2184e48b0bdbf5f959ce622bc4a913fdb726558b156ba757386df->leave($__internal_55d79366b9e2184e48b0bdbf5f959ce622bc4a913fdb726558b156ba757386df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
