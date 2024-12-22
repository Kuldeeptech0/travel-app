@extends('layout.adminlayout')
@section('content')
<div class="d-flex">
    @include('pages.admin.component.sidebar')

    <div class="admin-settings">
        <div class="settings-container">
            <!-- Header -->
            <div class="settings-header">
                <div class="header-wrapper">
                    <i class="fas fa-user-cog header-icon"></i>
                    <div>
                        <h2>Account Settings</h2>
                        <p class="text-muted">Manage your personal information and preferences</p>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="settings-card">
                <form class="settings-form">
                    <!-- Profile Section -->
                    <div class="profile-section">
                        <div class="avatar-section">
                            <div class="avatar-wrapper">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Profile" class="profile-avatar">
                                <div class="avatar-overlay">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </div>
                            <div class="avatar-info">
                                <h3>John Wilson</h3>
                                <p>Senior Travel Administrator</p>
                            </div>
                        </div>

                        <!-- Personal Information -->
                        <div class="section-group">
                            <h4><i class="fas fa-id-card"></i> Personal Information</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label><i class="fas fa-user"></i> First Name</label>
                                    <input type="text" class="form-control" value="John">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-user"></i> Last Name</label>
                                    <input type="text" class="form-control" value="Wilson">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-envelope"></i> Email Address</label>
                                    <input type="email" class="form-control" value="john.wilson@traveltours.com">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-phone"></i> Phone Number</label>
                                    <input type="tel" class="form-control" value="+1 (555) 123-4567">
                                </div>
                            </div>
                        </div>

                        <div class="section-group">
                            <h4><i class="fas fa-briefcase"></i> Professional Details</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label><i class="fas fa-user-tie"></i> Position</label>
                                    <input type="text" class="form-control" value="Senior Travel Administrator">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-building"></i> Department</label>
                                    <input type="text" class="form-control" value="Tour Management">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-calendar-check"></i> Join Date</label>
                                    <input type="date" class="form-control" value="2020-06-15">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-globe-americas"></i> Specialization</label>
                                    <input type="text" class="form-control" value="International Tours">
                                </div>
                            </div>
                        </div>

                        <div class="section-group">
                            <h4><i class="fas fa-certificate"></i> Certifications</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label><i class="fas fa-award"></i> Travel Management</label>
                                    <input type="text" class="form-control" value="Certified Travel Professional (CTP)">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-award"></i> Tourism Operations</label>
                                    <input type="text" class="form-control" value="Tourism Management Certificate">
                                </div>
                            </div>
                        </div>
                        <!-- Address Information -->
                        <div class="section-group">
                            <h4><i class="fas fa-map-marker-alt"></i> Address Information</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label><i class="fas fa-road"></i> Street Address</label>
                                    <input type="text" class="form-control" placeholder="Enter street address">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-city"></i> City</label>
                                    <input type="text" class="form-control" placeholder="Enter city">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-flag"></i> Country</label>
                                    <select class="form-control">
                                        <option>Select Country</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-mail-bulk"></i> Postal Code</label>
                                    <input type="text" class="form-control" placeholder="Enter postal code">
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="section-group">
                            <h4><i class="fas fa-share-alt"></i> Social Links</h4>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label><i class="fab fa-linkedin"></i> LinkedIn</label>
                                    <input type="url" class="form-control" placeholder="LinkedIn profile URL">
                                </div>
                                <div class="form-group">
                                    <label><i class="fab fa-twitter"></i> Twitter</label>
                                    <input type="url" class="form-control" placeholder="Twitter profile URL">
                                </div>
                                <div class="form-group">
                                    <label><i class="fab fa-facebook"></i> Facebook</label>
                                    <input type="url" class="form-control" placeholder="Facebook profile URL">
                                </div>
                                <div class="form-group">
                                    <label><i class="fab fa-instagram"></i> Instagram</label>
                                    <input type="url" class="form-control" placeholder="Instagram profile URL">
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-save">
                                <i class="fas fa-save"></i> Save Changes
                            </button>
                            <button type="button" class="btn-cancel">
                                <i class="fas fa-times"></i> Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.admin-settings {
    flex: 1;
    margin-left: 250px;
    background: #f8f9fa;
    min-height: 100vh;
    padding: 2rem;
}

.settings-container {
    max-width: 1200px;
    margin: 0 auto;
}

.header-wrapper {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
}

.header-icon {
    font-size: 2rem;
    color: #0d6efd;
}

.settings-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    padding: 2rem;
}

.section-group {
    margin-bottom: 2.5rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.section-group h4 {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
    color: #333;
}

.section-group h4 i {
    color: #0d6efd;
}

.avatar-section {
    display: flex;
    align-items: center;
    gap: 2rem;
    margin-bottom: 2rem;
}

.avatar-wrapper {
    position: relative;
    width: 120px;
    height: 120px;
}

.profile-avatar {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #fff;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.avatar-overlay {
    position: absolute;
    bottom: 0;
    right: 0;
    background: #0d6efd;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.avatar-overlay:hover {
    transform: scale(1.1);
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    color: #555;
    font-weight: 500;
}

.form-group label i {
    color: #0d6efd;
}

.form-control {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.1);
    outline: none;
}

.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}

.btn-save, .btn-cancel {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.btn-save {
    background: #0d6efd;
    color: white;
    border: none;
}

.btn-cancel {
    background: #f8f9fa;
    border: 1px solid #ddd;
    color: #444;
}

.btn-save:hover {
    background: #0b5ed7;
}

.btn-cancel:hover {
    background: #e9ecef;
}
</style>
@endsection
