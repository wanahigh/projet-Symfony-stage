<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_8684aea78695ed7905dc261447fb0273cf95d756a5786fb3ac7d5aafaad9a840 extends Twig_Template
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
        $__internal_f19b050d27c04c4e58872120c70ba7b39f9672d6cdfc3ead5d0e75a959b8e66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f19b050d27c04c4e58872120c70ba7b39f9672d6cdfc3ead5d0e75a959b8e66e->enter($__internal_f19b050d27c04c4e58872120c70ba7b39f9672d6cdfc3ead5d0e75a959b8e66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_3c42f930d98dbb35f17aa5629f1dd2b44ca844d5021968b22a99c64586a7ace9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c42f930d98dbb35f17aa5629f1dd2b44ca844d5021968b22a99c64586a7ace9->enter($__internal_3c42f930d98dbb35f17aa5629f1dd2b44ca844d5021968b22a99c64586a7ace9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f19b050d27c04c4e58872120c70ba7b39f9672d6cdfc3ead5d0e75a959b8e66e->leave($__internal_f19b050d27c04c4e58872120c70ba7b39f9672d6cdfc3ead5d0e75a959b8e66e_prof);

        
        $__internal_3c42f930d98dbb35f17aa5629f1dd2b44ca844d5021968b22a99c64586a7ace9->leave($__internal_3c42f930d98dbb35f17aa5629f1dd2b44ca844d5021968b22a99c64586a7ace9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
