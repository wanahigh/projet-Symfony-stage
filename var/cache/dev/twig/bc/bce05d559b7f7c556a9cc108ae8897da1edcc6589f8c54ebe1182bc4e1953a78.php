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
        $__internal_9840f925a68997abc2c6e3b6673cfb7e2d86c8f8e615fd899027a0fe2632e633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9840f925a68997abc2c6e3b6673cfb7e2d86c8f8e615fd899027a0fe2632e633->enter($__internal_9840f925a68997abc2c6e3b6673cfb7e2d86c8f8e615fd899027a0fe2632e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a1de0e81a8dabc85bf5344aa9e8058ade6c4fe10e832b6b51c0f212f65ed55b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1de0e81a8dabc85bf5344aa9e8058ade6c4fe10e832b6b51c0f212f65ed55b3->enter($__internal_a1de0e81a8dabc85bf5344aa9e8058ade6c4fe10e832b6b51c0f212f65ed55b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9840f925a68997abc2c6e3b6673cfb7e2d86c8f8e615fd899027a0fe2632e633->leave($__internal_9840f925a68997abc2c6e3b6673cfb7e2d86c8f8e615fd899027a0fe2632e633_prof);

        
        $__internal_a1de0e81a8dabc85bf5344aa9e8058ade6c4fe10e832b6b51c0f212f65ed55b3->leave($__internal_a1de0e81a8dabc85bf5344aa9e8058ade6c4fe10e832b6b51c0f212f65ed55b3_prof);

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
