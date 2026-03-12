<?php include 'includes/header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Hubungi Saya</h1>
        <p>Diskusikan ide dan kebutuhan teknologi Anda</p>
    </div>
</section>

<section class="contact">
    <div class="container">
        <?php
        if (isset($_SESSION['contact_success'])) {
            echo '<div class="alert alert-success">' . $_SESSION['contact_success'] . '</div>';
            unset($_SESSION['contact_success']);
        }
        if (isset($_SESSION['contact_error'])) {
            echo '<div class="alert alert-error">' . $_SESSION['contact_error'] . '</div>';
            unset($_SESSION['contact_error']);
        }
        ?>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h2>Mari Berdiskusi</h2>
                <p>Tertarik dengan salah satu proyek saya? Atau punya ide untuk dikembangkan? Jangan ragu untuk menghubungi saya. Saya siap membantu mewujudkan solusi teknologi untuk bisnis Anda.</p>
                
                <div class="info-details">
                    <div class="info-item">
                        <span class="info-icon">📧</span>
                        <div>
                            <h4>Email</h4>
                            <p>founder@echotechnology.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📱</span>
                        <div>
                            <h4>Telepon</h4>
                            <p>+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📍</span>
                        <div>
                            <h4>Alamat</h4>
                            <p>Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <form action="contact-process.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>