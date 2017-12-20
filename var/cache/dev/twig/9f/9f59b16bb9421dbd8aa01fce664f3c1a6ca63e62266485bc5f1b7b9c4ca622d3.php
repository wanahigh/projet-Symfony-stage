<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_62b8a723da0e14649e14c99bbf3f3dc95824e29bd9b9d04e73548f3db6182a8c extends Twig_Template
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
        $__internal_cf664f454211cd67fd91de320404a576e1e60c13719153ec2ef8eb7c005da37b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf664f454211cd67fd91de320404a576e1e60c13719153ec2ef8eb7c005da37b->enter($__internal_cf664f454211cd67fd91de320404a576e1e60c13719153ec2ef8eb7c005da37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_56ffec84ea9071794ca6e4509694a7ce3e33a95305b38b787dc6f7c2e682d68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ffec84ea9071794ca6e4509694a7ce3e33a95305b38b787dc6f7c2e682d68b->enter($__internal_56ffec84ea9071794ca6e4509694a7ce3e33a95305b38b787dc6f7c2e682d68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cf664f454211cd67fd91de320404a576e1e60c13719153ec2ef8eb7c005da37b->leave($__internal_cf664f454211cd67fd91de320404a576e1e60c13719153ec2ef8eb7c005da37b_prof);

        
        $__internal_56ffec84ea9071794ca6e4509694a7ce3e33a95305b38b787dc6f7c2e682d68b->leave($__internal_56ffec84ea9071794ca6e4509694a7ce3e33a95305b38b787dc6f7c2e682d68b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
