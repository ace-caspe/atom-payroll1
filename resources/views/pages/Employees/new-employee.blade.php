@extends('main')
@section('title','New Employee')
@section('content')
<div class="odecci-full-container">
    <div class="odecci-new-employee">
        <!-- * SECTION START of module head -->
        <div class="oddeci-module-head">
            <div class="odecci-module-title">
                <h1 class="odecci-title">Add Employee</h1>
                <p class="odecci-head-note">Last update was Monday, June 13, 2023 10:00 AM By Admin</p>
            </div>
            <div class="odecci-profile">
                <img src="{{ asset("assets/icons/profile.png") }}" alt="profile" width="100%" height="100%">
            </div>
        </div>

        <!-- * !SECTION END of module head -->
        <!-- * SECTION START of module body -->
        <div class="odecci-module-body">
            <div class="odecci-row">
                @livewire('components.dropdown', ['title'=>'Department','selections'=>['Accounting','MIS','Warehouse','Purchasing','Sales']])
                @livewire('components.dropdown', ['title'=>'Position','selections'=>['Director','Executive','Manager','Assistant Manager','Accounting 1','Accounting 2']])
                @livewire('components.dropdown', ['title'=>'Employment','selections'=>['Regular','Probitionary','Part Time','Freelancer','Contractual']])

            </div>
            <div class="odecci-separator">
                <label>Personal Information</label>
                <hr>
            </div>
            <div class="odecci-row">

                @livewire('components.textbox', ['name'=>'last-name','label'=>"Last Name", 'fieldId'=>'last-name','class'=>'odecci-lg-input','value'=>''])
                @livewire('components.textbox', ['name'=>'first-name','label'=>"First Name", 'fieldId'=>'first-name','class'=>'odecci-lg-input','value'=>''])
                @livewire('components.textbox', ['name'=>'middle-name','label'=>"Middle Name", 'fieldId'=>'middle-name','class'=>'odecci-lg-input','value'=>''])
                @livewire('components.textbox', ['name'=>'suffix','label'=>"Suffix", 'fieldId'=>'suffix','class'=>'odecci-lg-input','value'=>''])

            </div>
            <div class="odecci-row">
                @livewire('components.textbox', ['name'=>'birthdate','label'=>"Birthdate", 'fieldId'=>'birthdate','class'=>'odecci-lg-input','value'=>''])
                @livewire('components.textbox', ['name'=>'age','label'=>"Age", 'fieldId'=>'age','class'=>'odecci-lg-input','value'=>''])
                @livewire('components.dropdown', ['title'=>'Gender','selections'=>['Male','Female']])
    
         
        
            </div>
            <div class="odecci-row">
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="house-number" id="houseNo" placeholder="House/Floor/Building No.">
                    <label class="input-label" for="house-number">House/Floor/Building No.</label>
                </div>
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="street-name" id="streetNAme" placeholder="Street">
                    <label class="input-label" for="street-name">Street</label>
                </div>
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="barangay-name" id="baranggayName" placeholder="Baraggay">
                    <label class="input-label" for="barangay-name">Baranggay</label>
                </div>
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="city-name" id="cityName" placeholder="City">
                    <label class="input-label" for="city-name">City</label>
                </div>
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="province-name" id="provinceName" placeholder="Province">
                    <label class="input-label" for="province-name">Province</label>
                </div>
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="zipcode" id="zipcode" placeholder="Zip Code">
                    <label class="input-label" for="zipcode">Zip Code</label>
                </div>
                <div class="odecci-input-group odecci-lg-input">
                    <input type="text" name="country" id="country" placeholder="Country">
                    <label class="input-label" for="country">Country</label>
                </div>
            </div>
            <!-- * SECTION START of attachemnt section -->
            <div class="odecci-attachment-section">
                <button class="odecci-action-btn"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.125 0.25H1.875C1.44402 0.25 1.0307 0.421205 0.725951 0.725951C0.421205 1.0307 0.25 1.44402 0.25 1.875V18.125C0.25 18.556 0.421205 18.9693 0.725951 19.274C1.0307 19.5788 1.44402 19.75 1.875 19.75H18.125C18.556 19.75 18.9693 19.5788 19.274 19.274C19.5788 18.9693 19.75 18.556 19.75 18.125V1.875C19.75 1.44402 19.5788 1.0307 19.274 0.725951C18.9693 0.421205 18.556 0.25 18.125 0.25ZM18.125 18.125H1.875V1.875H18.125V18.125ZM14.875 10C14.875 10.2155 14.7894 10.4222 14.637 10.5745C14.4847 10.7269 14.278 10.8125 14.0625 10.8125H10.8125V14.0625C10.8125 14.278 10.7269 14.4847 10.5745 14.637C10.4222 14.7894 10.2155 14.875 10 14.875C9.78451 14.875 9.57785 14.7894 9.42548 14.637C9.2731 14.4847 9.1875 14.278 9.1875 14.0625V10.8125H5.9375C5.72201 10.8125 5.51535 10.7269 5.36298 10.5745C5.2106 10.4222 5.125 10.2155 5.125 10C5.125 9.78451 5.2106 9.57785 5.36298 9.42548C5.51535 9.2731 5.72201 9.1875 5.9375 9.1875H9.1875V5.9375C9.1875 5.72201 9.2731 5.51535 9.42548 5.36298C9.57785 5.2106 9.78451 5.125 10 5.125C10.2155 5.125 10.4222 5.2106 10.5745 5.36298C10.7269 5.51535 10.8125 5.72201 10.8125 5.9375V9.1875H14.0625C14.278 9.1875 14.4847 9.2731 14.637 9.42548C14.7894 9.57785 14.875 9.78451 14.875 10Z"
                            fill="white" />
                    </svg>
                    <span>Attach Files</span></button>
                <div class="odecci-attachment-container"><a class="odecci-attachment-btn"><svg width="20" height="23"
                            viewBox="0 0 20 29" fill="black" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.7761 5.90317L17.755 0.32625C17.6616 0.222704 17.5508 0.140596 17.4289 0.0846174C17.307 0.0286384 17.1764 -0.000114869 17.0445 3.44875e-07H7.00218C6.4695 3.44875e-07 5.95864 0.235027 5.58198 0.653377C5.20533 1.07173 4.99372 1.63913 4.99372 2.23077V4.46154H2.98526C2.45259 4.46154 1.94173 4.69657 1.56507 5.11492C1.18841 5.53327 0.976807 6.10067 0.976807 6.69231V26.7692C0.976807 27.3609 1.18841 27.9283 1.56507 28.3466C1.94173 28.765 2.45259 29 2.98526 29H17.0445C17.5771 29 18.088 28.765 18.4647 28.3466C18.8413 27.9283 19.0529 27.3609 19.0529 26.7692V24.5385H21.0614C21.594 24.5385 22.1049 24.3034 22.4816 23.8851C22.8582 23.4667 23.0698 22.8993 23.0698 22.3077V6.69231C23.0699 6.54579 23.044 6.40069 22.9936 6.26528C22.9432 6.12988 22.8693 6.00683 22.7761 5.90317ZM17.0445 26.7692H2.98526V6.69231H12.612L17.0445 11.6153V23.4008C17.0445 23.4091 17.0445 23.4161 17.0445 23.4231C17.0445 23.43 17.0445 23.437 17.0445 23.4454V26.7692ZM21.0614 22.3077H19.0529V11.1538C19.053 11.0073 19.0271 10.8622 18.9767 10.7268C18.9263 10.5914 18.8524 10.4684 18.7592 10.3647L13.738 4.78779C13.6447 4.68424 13.5339 4.60213 13.412 4.54616C13.2901 4.49018 13.1595 4.46142 13.0275 4.46154H7.00218V2.23077H16.629L21.0614 7.1538V22.3077ZM14.0318 17.8462C14.0318 18.142 13.926 18.4257 13.7376 18.6348C13.5493 18.844 13.2939 18.9615 13.0275 18.9615H7.00218C6.73584 18.9615 6.48041 18.844 6.29208 18.6348C6.10375 18.4257 5.99795 18.142 5.99795 17.8462C5.99795 17.5503 6.10375 17.2666 6.29208 17.0575C6.48041 16.8483 6.73584 16.7308 7.00218 16.7308H13.0275C13.2939 16.7308 13.5493 16.8483 13.7376 17.0575C13.926 17.2666 14.0318 17.5503 14.0318 17.8462ZM14.0318 22.3077C14.0318 22.6035 13.926 22.8872 13.7376 23.0964C13.5493 23.3056 13.2939 23.4231 13.0275 23.4231H7.00218C6.73584 23.4231 6.48041 23.3056 6.29208 23.0964C6.10375 22.8872 5.99795 22.6035 5.99795 22.3077C5.99795 22.0119 6.10375 21.7282 6.29208 21.519C6.48041 21.3098 6.73584 21.1923 7.00218 21.1923H13.0275C13.2939 21.1923 13.5493 21.3098 13.7376 21.519C13.926 21.7282 14.0318 22.0119 14.0318 22.3077Z"
                                fill="#102B3C" />
                        </svg>
                        <span>Filename.pdf</span> <span class="remove-btn">x</span></a> <a class="show-all-btn">Show
                        All..</a>
                </div>
            </div>
            <!-- * !SECTION END of attachemnt section -->
        </div>
        <!-- * !SECTION END of module body -->

        <!-- * SECTION START of module footer -->
        <!-- * !SECTION END of module footer -->
    </div>

</div>
@endsection