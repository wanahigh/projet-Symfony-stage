<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e6def5d283c7b0d3c2f6d145fe24878db5aac479fa3974963bcb40a89d46fa05 extends Twig_Template
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
        $__internal_1549b5544d8e3d0508e9654570301db1ac9c4a49f28f3b7119065ed7a16f236f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1549b5544d8e3d0508e9654570301db1ac9c4a49f28f3b7119065ed7a16f236f->enter($__internal_1549b5544d8e3d0508e9654570301db1ac9c4a49f28f3b7119065ed7a16f236f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7ea84bcdaa917fa5ea059ea57c8d67a0272044a54570b1d08f12247f0c646fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea84bcdaa917fa5ea059ea57c8d67a0272044a54570b1d08f12247f0c646fd2->enter($__internal_7ea84bcdaa917fa5ea059ea57c8d67a0272044a54570b1d08f12247f0c646fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1549b5544d8e3d0508e9654570301db1ac9c4a49f28f3b7119065ed7a16f236f->leave($__internal_1549b5544d8e3d0508e9654570301db1ac9c4a49f28f3b7119065ed7a16f236f_prof);

        
        $__internal_7ea84bcdaa917fa5ea059ea57c8d67a0272044a54570b1d08f12247f0c646fd2->leave($__internal_7ea84bcdaa917fa5ea059ea57c8d67a0272044a54570b1d08f12247f0c646fd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
