<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d4e5a30a3fb85996420d50dfce3d0ccaf879f513f7e9bc9c245689929e021b54 extends Twig_Template
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
        $__internal_eb9ca043e4c091af6897e504fdc9cc62ef4234086e3f6c4940cf8468923d4bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9ca043e4c091af6897e504fdc9cc62ef4234086e3f6c4940cf8468923d4bc0->enter($__internal_eb9ca043e4c091af6897e504fdc9cc62ef4234086e3f6c4940cf8468923d4bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8ecd91f8c29672bcee14f9ab18753cec8db8f6b3703e95ef52690a3d4cd3a4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecd91f8c29672bcee14f9ab18753cec8db8f6b3703e95ef52690a3d4cd3a4eb->enter($__internal_8ecd91f8c29672bcee14f9ab18753cec8db8f6b3703e95ef52690a3d4cd3a4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_eb9ca043e4c091af6897e504fdc9cc62ef4234086e3f6c4940cf8468923d4bc0->leave($__internal_eb9ca043e4c091af6897e504fdc9cc62ef4234086e3f6c4940cf8468923d4bc0_prof);

        
        $__internal_8ecd91f8c29672bcee14f9ab18753cec8db8f6b3703e95ef52690a3d4cd3a4eb->leave($__internal_8ecd91f8c29672bcee14f9ab18753cec8db8f6b3703e95ef52690a3d4cd3a4eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
