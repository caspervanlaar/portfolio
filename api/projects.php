<?php include 'header.php'; ?>
<main>
    <section class="projects">
        <h2>Projects</h2>
        

<div class="project">
<div class="project-header">
    <img src="https://raw.githubusercontent.com/caspervanlaar/portfolio/refs/heads/main/_51164edc-2724-4f6c-b8a7-462f8778870b.jpg", alt="" aria-hidden="true">
  <h3>Current project</h3>
    </div>
    
  <div class="project-body">
       
     <p>For my dissertation, I’m exploring how ideas from population-level brain dynamics can improve lightweight neural networks. 
         Instead of treating neuron activations as isolated events, I introduce a shared temporal field that integrates activity across a layer over time. 
         This field provides global context and dynamically modulates neural responses, similar in spirit to how population signals coordinate activity in biological brains.
         The approach is tested in ultra-small models on temporal benchmarks and EEG-related tasks, with a focus on generalization, training stability, and learning dynamics. 
         The goal is not biological realism, but principled inductive bias design inspired by neuroscience.</p>
  </div>
</div>



<div class="project">
<div class="project-header">
    <img src="https://raw.githubusercontent.com/caspervanlaar/portfolio/refs/heads/main/pixelartgit.png" alt="" aria-hidden="true">
  <h3>Wavenet</h3>
    </div>
  
    <div class="project-content">
    
    <p>Trained a WaveNet model to sort iEEG segments into physiological, pathological, artifact, and noise categories using a large annotated dataset from Mayo Clinic and St. Anne’s University Hospital. 
        The model captures both short-range and long-range temporal structure through dilated causal convolutions and residual paths, which turned out to be a strong match for raw EEG.
        
        It outperformed earlier CNN and LSTM approaches, held its ground against a Temporal Convolutional Network baseline, and showed particularly sharp performance on noise and artifact detection. 
        Some confusion between physiological and pathological classes remains, which mirrors the clinical ambiguity seen in practice. The pipeline includes dynamic dataset partitioning, normalization, and other steps aimed at making the model generalize rather than memorize.
<p>
    <a href="https://arxiv.org/abs/2510.15947" target="_blank">
        View preprint on arXiv
    </a>
</p>

<p>
    <a href="https://doi.org/10.1007/s12021-026-09771-8" target="_blank">
        View published article in Neuroinformatics
    </a>
</p>
  </div>
</div>  



<div class="project">
<div class="project-header">
    <img src="https://raw.githubusercontent.com/caspervanlaar/portfolio/refs/heads/main/neurpixel.jpg" alt="" aria-hidden="true"></a>
  <h3>Brain region identification</h3>
    </div>
  <div class="project-content"> 
      
    <p>This project tackles a long-standing issue in systems neuroscience: figuring out where Neuropixels recordings come from without relying on post-hoc histology. 
        Instead of tracking probe locations through tissue and atlases, I built a data-driven method that classifies brain regions directly from electrophysiological activity.
        Using the Allen Brain Observatory dataset, I compared classical models with several deep learning architectures trained on spike-train features and PSTHs. 
        Traditional approaches collapsed across animals (accuracy <0.19), while deep models—especially a Transformer—learned reproducible neural signatures across mice (accuracy 0.35, AUC 0.86). 
        Thalamic regions were the most identifiable.
        The results show that different brain areas carry their own electrophysiological “fingerprints,” making it possible to infer anatomical labels purely from neural responses. 
        This approach could eventually reduce dependence on histology and support less invasive localization strategies in neuroscience research. 
        <a href="https://github.com/caspervanlaar/portfolio/blob/main/CVL_2440678_7CS078UZ1_Data%20Science.pdf" target="_blank">View the report</a></p>
    </div>
</div>

        
<div class="project">
<div class="project-header">
  <img src="https://raw.githubusercontent.com/caspervanlaar/portfolio/refs/heads/main/eq.png" alt="" aria-hidden="true"></a>
    <h3>Trauma severity classifier</h3>
</div>
    <div class="project-content">

    <p>I have worked on a project to classify trauma severity using EEG and other physiological data. Using various statistical and machine learning methods.
        The goal of this project was not getting a the best model.  Since there are better classifying techniques for that.
        But to sharpen my mathematical understanding of regression and classifying techniques. </p>
        <p><a href="https://github.com/caspervanlaar/portfolio/blob/main/CASPER_VAN_LAAR_7CS070UZ3_CLASSIFICATION_REPORT.pdf" target="_blank">View classification report</a>
       <a href="https://github.com/caspervanlaar/portfolio/blob/main/CASPER_VAN_LAAR_7CS070UZ3_REGRESSION_REPORT.pdf" target="_blank">View regression report</a></p>
    </div>
</div>

    


<div class="project">
<div class="project-header">
  <img src="https://raw.githubusercontent.com/caspervanlaar/portfolio/refs/heads/main/PSYBREI.png" alt="" aria-hidden="true"></a>
    <h3>EEG-based comprehension prediction</h3>
</div>
    <div class="project-content">

  <p>This project explored whether EEG signals can predict how well subjects understand educational videos. 
      Using 14-channel EEG data and self-reported comprehension scores, I applied both supervised and unsupervised learning methods.
      Support Vector Machines achieved up to 88.66% balanced accuracy. PCA and K-Means revealed underlying patterns 
      linked to comprehension. The findings highlight EEG’s potential for adaptive learning systems and real-time cognitive monitoring. 
      <a href="https://github.com/caspervanlaar/portfolio/blob/main/REPORT_CVL_2440678_EEG_7CS074_UZ3.pdf" target="_blank">View report</a></p>
  </div>
</div>


<div class="project">
    <div class="project-header">
  <img src="https://raw.githubusercontent.com/caspervanlaar/portfolio/refs/heads/main/DBJJL.png" alt="" Daria-hidden="true"></a>
        <h3>DBJJL</h3>
</div>
        <div class="project-content">

  <p>What started as a passion project quickly turned into a growing community. 
    I founded the Dutch Brazilian Jiu Jitsu League to bring more structure and consistency to local BJJ competitions. 
    Running the league taught me a lot about organizing events, managing logistics, getting sponsors and
    building something from the ground up. 
    It was one of the most rewarding things I did outside of academia, driven by a love for the sport and the desire to give back.
    The league is currently paused, as I moved to Australia </p>
      
  </div>
</div>
</section>
</main>
<?php include 'footer.php'; ?>
