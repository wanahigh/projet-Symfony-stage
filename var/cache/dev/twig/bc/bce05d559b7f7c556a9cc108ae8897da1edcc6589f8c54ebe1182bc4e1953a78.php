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
        $__internal_0641dd853e28a3b002c654c814ccbb2b7125f12bb5fb4673ba46837e7f61db81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0641dd853e28a3b002c654c814ccbb2b7125f12bb5fb4673ba46837e7f61db81->enter($__internal_0641dd853e28a3b002c654c814ccbb2b7125f12bb5fb4673ba46837e7f61db81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ed1c3fe8c63e7f92e5f50788bea64700329222a4330d31d6a2c4686a927ecf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1c3fe8c63e7f92e5f50788bea64700329222a4330d31d6a2c4686a927ecf58->enter($__internal_ed1c3fe8c63e7f92e5f50788bea64700329222a4330d31d6a2c4686a927ecf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0641dd853e28a3b002c654c814ccbb2b7125f12bb5fb4673ba46837e7f61db81->leave($__internal_0641dd853e28a3b002c654c814ccbb2b7125f12bb5fb4673ba46837e7f61db81_prof);

        
        $__internal_ed1c3fe8c63e7f92e5f50788bea64700329222a4330d31d6a2c4686a927ecf58->leave($__internal_ed1c3fe8c63e7f92e5f50788bea64700329222a4330d31d6a2c4686a927ecf58_prof);

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
