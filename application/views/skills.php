
<body>
	
<section class="skills-section">
    <div class="skills-container">
        <div class="skill-card">
            <img src="<?php echo base_url('application/assets/images/developer.png'); ?>" alt="Web Development">
            <h3>Web Development</h3>
            <ul>
                <li>Developing web applications and systems</li>
                <li>Working with PHP (Laravel, CodeIgniter 3), Java, MySQL</li>
                <li>Frontend development with HTML, CSS, and JavaScript</li>
            </ul>
            <button class="learn-more">Get to Know More</button>
        </div>
        <div class="skill-card">
            <img src="<?php echo base_url('application/assets/images/designer.png'); ?>" alt="Digital Design">
            <h3>Digital Design</h3>
            <ul>
                <li>Creating engaging social media graphics</li>
                <li>Designing marketing materials</li>
                <li>UI mockups using Canva and Adobe Photoshop</li>
            </ul>
            <button class="learn-more">Get to Know More</button>
        </div>
        <div class="skill-card">
            <img src="<?php echo base_url('application/assets/images/va.png'); ?>" alt="Virtual Assistance">
            <h3>Virtual Assistance</h3>
            <ul>
                <li>Managing reports and documentation</li>
                <li>Scheduling and organizing tasks</li>
                <li>Using Google Workspace, Microsoft Word, and Excel</li>
            </ul>
            <button class="learn-more">Get to Know More</button>
        </div>
    </div>
</section>

</body>


<style>

body {
            background: #000;
            color: white;
            text-align: center;
            position: relative;
			overflow: auto;
        }
	
    .skills-section {
        padding: 50px 10%;
        background: transparent;
    }
    .skills-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .skill-card {
        background: rgba(0, 0, 0, 0.7);
        width: 300px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(255, 105, 180, 0.8);
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        height: auto;
    }
    .skill-card img {
        width: 100%;
        height: auto;
        object-fit: contain;
        border-radius: 5px;
    }
    .skill-card h3 {
        margin: 1px 0 10px;
        color: #ff69b4;
        text-shadow: 0 0 10px #ff69b4;
    }
    .skill-card ul {
        font-size: 14px;
        color: #fff;
        margin-bottom: auto;
        text-align: left;
        padding-left: 20px;
        flex-grow: 1;
    }
    .skill-card ul li {
        margin-bottom: 5px;
    }
    .learn-more {
        background: #ff69b4;
        color: white;
        border: none;
		margin-top: 13px;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        box-shadow: 0 0 10px #ff69b4, 0 0 20px #ff1493;
        width: 100%;
        height: 50px;
    }
    .learn-more:hover {
        background: #cc5699;
        box-shadow: 0 0 15px #ff69b4, 0 0 30px #ff1493;
    }
</style>
