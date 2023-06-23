@extends('main')
@section('title','New Employee')
@section('content')
<div class="odecci-full-container">
    <form class="odecci-new-employee-form" method="post" onsubmit="event.preventDefault()">
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
                    @livewire('components.dropdown',
                    ['title'=>'Department','selections'=>['Accounting','MIS','Warehouse','Purchasing','Sales']])
                    @livewire('components.dropdown',
                    ['title'=>'Position','selections'=>['Director','Executive','Manager','Assistant Manager','Accounting
                    1','Accounting 2']])
                    @livewire('components.dropdown',
                    ['title'=>'Employment','selections'=>['Regular','Probitionary','Part
                    Time','Freelancer','Contractual']])
                </div>
                <div class="odecci-separator">
                    <label>Personal Information</label>
                    <hr>
                </div>
                <div class="odecci-row">
                    @livewire('components.textbox', ['name'=>'last-name','label'=>"Last Name",
                    'fieldId'=>'last-name','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'first-name','label'=>"First Name",
                    'fieldId'=>'first-name','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'middle-name','label'=>"Middle Name",
                    'fieldId'=>'middle-name','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'suffix','label'=>"Suffix",
                    'fieldId'=>'suffix','class'=>'odecci-lg-input','value'=>''])
                </div>
                <div class="odecci-row">
                    @livewire('components.textbox', ['name'=>'birthdate','label'=>"Birthdate",
                    'fieldId'=>'birthdate','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'age','label'=>"Age",
                    'fieldId'=>'age','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.dropdown', ['title'=>'Gender','selections'=>['Male','Female']])
                </div>
                <div class="odecci-row">
                    @livewire('components.textbox', ['name'=>'houseNo','label'=>"House/Floor/Building No.",
                    'fieldId'=>'houseNo','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'street-name','label'=>"Street",
                    'fieldId'=>'streetNAme','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'barangay-name','label'=>"Barangay",
                    'fieldId'=>'baranggayName','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'city-name','label'=>"City",
                    'fieldId'=>'cityName','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'province-name','label'=>"Province",
                    'fieldId'=>'provinceName','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'zipcode','label'=>"Zip Code",
                    'fieldId'=>'zipcode','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'country','label'=>"Country",
                    'fieldId'=>'country','class'=>'odecci-lg-input','value'=>'','type'=>'text','isRequired'=>true])
                </div>
                <div class="odecci-separator">
                    <label>Contact Details</label>
                    <hr>
                </div>
                <div class="odecci-row">
                    @livewire('components.textbox', ['name'=>'phoneNo','label'=>"Phone No.",
                    'fieldId'=>'phoneNo','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'telNo','label'=>"Tel No.",
                    'fieldId'=>'telNo','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'personalEmail','label'=>"Persoanl Email",
                    'fieldId'=>'personalEmail','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'workEmail','label'=>"Work Email",
                    'fieldId'=>'workEmail','class'=>'odecci-lg-input','value'=>'','type'=>'email','isRequired'=>true])
                    @livewire('components.textbox', ['name'=>'emeregencyPerson','label'=>"Emergency Contact Person",
                    'fieldId'=>'emergencyPerson','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'emeregencyContactNo','label'=>"Emergency Contact No.",
                    'fieldId'=>'emergencyContactNo','class'=>'odecci-lg-input','value'=>''])
                </div>
                <div class="odecci-separator">
                    <label>Social Media (Optional)</label>
                    <hr>
                </div>
                <div class="odecci-row">
                    @livewire('components.textbox', ['name'=>'facebook','label'=>"Facebook",
                    'fieldId'=>'facebook','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'instagtam','label'=>"Instagram",
                    'fieldId'=>'instagram','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'tiktok','label'=>"Tiktok",
                    'fieldId'=>'tiktok','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'twitter','label'=>"Twitter",
                    'fieldId'=>'twitter','class'=>'odecci-lg-input','value'=>''])
                </div>
                <div class="odecci-separator">
                    <label>Mandatories</label>
                    <hr>
                </div>
                <div class="odecci-row">
                    @livewire('components.textbox', ['name'=>'sss','label'=>"SSS",
                    'fieldId'=>'sss','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'philhealth','label'=>"Philhealth",
                    'fieldId'=>'philhealth','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'pagibig','label'=>"Pag-Ibig",
                    'fieldId'=>'pagibig','class'=>'odecci-lg-input','value'=>''])
                    @livewire('components.textbox', ['name'=>'tin','label'=>"Tin Number",
                    'fieldId'=>'tin','class'=>'odecci-lg-input','value'=>''])
                </div>
                <div class="odecci-separator">
                    <label>Attachments</label>
                    <hr>
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
                    <div class="odecci-attachment-container"><a class="odecci-attachment-btn"><svg width="20"
                                height="23" viewBox="0 0 20 29" fill="black" xmlns="http://www.w3.org/2000/svg">
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

            <div class="odecci-floating-container">
                <div class="odecci-action-container">
                    <button class="odecci-close"> <span>Cancel</span> <svg width="27" height="27" viewBox="0 0 27 27"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.7898 10.6507L14.4961 13.9432L17.7898 17.2357C17.8828 17.3286 17.9565 17.4389 18.0067 17.5603C18.057 17.6817 18.0829 17.8118 18.0829 17.9432C18.0829 18.0746 18.057 18.2047 18.0067 18.3261C17.9565 18.4475 17.8828 18.5578 17.7898 18.6507C17.6969 18.7436 17.5866 18.8173 17.4652 18.8676C17.3438 18.9179 17.2137 18.9438 17.0823 18.9438C16.9509 18.9438 16.8208 18.9179 16.6994 18.8676C16.5781 18.8173 16.4678 18.7436 16.3748 18.6507L13.0823 15.357L9.78984 18.6507C9.69693 18.7436 9.58663 18.8173 9.46524 18.8676C9.34385 18.9179 9.21374 18.9438 9.08234 18.9438C8.95095 18.9438 8.82084 18.9179 8.69945 18.8676C8.57805 18.8173 8.46775 18.7436 8.37484 18.6507C8.28193 18.5578 8.20823 18.4475 8.15795 18.3261C8.10767 18.2047 8.08179 18.0746 8.08179 17.9432C8.08179 17.8118 8.10767 17.6817 8.15795 17.5603C8.20823 17.4389 8.28193 17.3286 8.37484 17.2357L11.6686 13.9432L8.37484 10.6507C8.1872 10.4631 8.08179 10.2086 8.08179 9.94324C8.08179 9.67787 8.1872 9.42338 8.37484 9.23574C8.56248 9.0481 8.81698 8.94268 9.08234 8.94268C9.34771 8.94268 9.6022 9.0481 9.78984 9.23574L13.0823 12.5295L16.3748 9.23574C16.4678 9.14283 16.5781 9.06913 16.6994 9.01884C16.8208 8.96856 16.9509 8.94268 17.0823 8.94268C17.2137 8.94268 17.3438 8.96856 17.4652 9.01884C17.5866 9.06913 17.6969 9.14283 17.7898 9.23574C17.8828 9.32865 17.9565 9.43895 18.0067 9.56034C18.057 9.68173 18.0829 9.81184 18.0829 9.94324C18.0829 10.0746 18.057 10.2047 18.0067 10.3261C17.9565 10.4475 17.8828 10.5578 17.7898 10.6507ZM26.0823 13.9432C26.0823 16.5144 25.3199 19.0278 23.8914 21.1656C22.463 23.3035 20.4327 24.9697 18.0572 25.9537C15.6818 26.9376 13.0679 27.1951 10.5462 26.6934C8.02442 26.1918 5.70804 24.9537 3.88995 23.1356C2.07187 21.3175 0.833742 19.0012 0.332134 16.4794C-0.169474 13.9577 0.0879691 11.3438 1.07191 8.96835C2.05585 6.59291 3.72209 4.56259 5.85993 3.13413C7.99777 1.70567 10.5112 0.943237 13.0823 0.943237C16.529 0.946877 19.8335 2.31768 22.2707 4.75487C24.7079 7.19205 26.0787 10.4965 26.0823 13.9432ZM24.0823 13.9432C24.0823 11.7676 23.4372 9.64091 22.2285 7.83196C21.0198 6.02302 19.3018 4.61313 17.2919 3.78056C15.2819 2.948 13.0701 2.73016 10.9363 3.1546C8.80256 3.57904 6.84255 4.62669 5.30417 6.16506C3.76579 7.70344 2.71814 9.66345 2.2937 11.7972C1.86927 13.931 2.0871 16.1428 2.91967 18.1528C3.75223 20.1627 5.16213 21.8807 6.97107 23.0894C8.78001 24.2981 10.9067 24.9432 13.0823 24.9432C15.9987 24.9399 18.7947 23.7799 20.8569 21.7178C22.919 19.6556 24.079 16.8596 24.0823 13.9432Z"
                               />
                        </svg>


                    </button> <button class="odecci-logs"> <span>Logs</span> <svg width="32" height="32"
                            viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 10V15.4338L21.515 18.1425C21.7424 18.2791 21.9063 18.5005 21.9705 18.7579C22.0347 19.0152 21.9941 19.2876 21.8575 19.515C21.7209 19.7425 21.4996 19.9063 21.2422 19.9705C20.9848 20.0348 20.7124 19.9941 20.485 19.8575L15.485 16.8575C15.337 16.7686 15.2146 16.6429 15.1296 16.4927C15.0446 16.3424 14.9999 16.1727 15 16V10C15 9.73482 15.1054 9.48047 15.2929 9.29293C15.4804 9.10539 15.7348 9.00004 16 9.00004C16.2652 9.00004 16.5196 9.10539 16.7071 9.29293C16.8946 9.48047 17 9.73482 17 10ZM16 4.00004C14.4225 3.99611 12.8599 4.30508 11.4026 4.90907C9.94527 5.51306 8.62222 6.40008 7.51 7.51879C6.60125 8.43879 5.79375 9.32379 5 10.25V8.00004C5 7.73482 4.89464 7.48047 4.70711 7.29293C4.51957 7.10539 4.26522 7.00004 4 7.00004C3.73478 7.00004 3.48043 7.10539 3.29289 7.29293C3.10536 7.48047 3 7.73482 3 8.00004V13C3 13.2653 3.10536 13.5196 3.29289 13.7071C3.48043 13.8947 3.73478 14 4 14H9C9.26522 14 9.51957 13.8947 9.70711 13.7071C9.89464 13.5196 10 13.2653 10 13C10 12.7348 9.89464 12.4805 9.70711 12.2929C9.51957 12.1054 9.26522 12 9 12H6.125C7.01875 10.9475 7.90875 9.95629 8.92375 8.92879C10.3136 7.53898 12.0821 6.58955 14.0085 6.19913C15.9348 5.80872 17.9335 5.99463 19.7547 6.73364C21.576 7.47265 23.1391 8.73199 24.2487 10.3543C25.3584 11.9766 25.9653 13.8899 25.9938 15.8552C26.0222 17.8205 25.4708 19.7506 24.4086 21.4043C23.3464 23.0581 21.8203 24.3621 20.0212 25.1535C18.2221 25.9448 16.2296 26.1885 14.2928 25.854C12.356 25.5194 10.5607 24.6216 9.13125 23.2725C9.03571 23.1823 8.92333 23.1117 8.80052 23.0648C8.6777 23.018 8.54686 22.9958 8.41547 22.9995C8.28407 23.0032 8.15469 23.0328 8.03472 23.0865C7.91475 23.1402 7.80653 23.217 7.71625 23.3125C7.62597 23.4081 7.55538 23.5205 7.50853 23.6433C7.46168 23.7661 7.43948 23.8969 7.44319 24.0283C7.44691 24.1597 7.47647 24.2891 7.53018 24.4091C7.58389 24.529 7.66071 24.6373 7.75625 24.7275C9.18056 26.0716 10.9122 27.0467 12.8 27.5677C14.6878 28.0886 16.6744 28.1396 18.5865 27.7162C20.4986 27.2929 22.278 26.4079 23.7694 25.1387C25.2608 23.8695 26.4189 22.2545 27.1427 20.4348C27.8664 18.6151 28.1338 16.6459 27.9215 14.699C27.7091 12.7522 27.0236 10.8869 25.9246 9.26595C24.8256 7.64501 23.3466 6.31766 21.6166 5.39977C19.8867 4.48187 17.9584 4.00131 16 4.00004Z" />
                        </svg>

                    </button>
                    <button class="odecci-trash"> <span>Trash</span> <svg width="32" height="32" viewBox="0 0 32 32"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27 6H22V5C22 4.20435 21.6839 3.44129 21.1213 2.87868C20.5587 2.31607 19.7956 2 19 2H13C12.2044 2 11.4413 2.31607 10.8787 2.87868C10.3161 3.44129 10 4.20435 10 5V6H5C4.73478 6 4.48043 6.10536 4.29289 6.29289C4.10536 6.48043 4 6.73478 4 7C4 7.26522 4.10536 7.51957 4.29289 7.70711C4.48043 7.89464 4.73478 8 5 8H6V26C6 26.5304 6.21071 27.0391 6.58579 27.4142C6.96086 27.7893 7.46957 28 8 28H24C24.5304 28 25.0391 27.7893 25.4142 27.4142C25.7893 27.0391 26 26.5304 26 26V8H27C27.2652 8 27.5196 7.89464 27.7071 7.70711C27.8946 7.51957 28 7.26522 28 7C28 6.73478 27.8946 6.48043 27.7071 6.29289C27.5196 6.10536 27.2652 6 27 6ZM12 5C12 4.73478 12.1054 4.48043 12.2929 4.29289C12.4804 4.10536 12.7348 4 13 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V6H12V5ZM24 26H8V8H24V26ZM14 13V21C14 21.2652 13.8946 21.5196 13.7071 21.7071C13.5196 21.8946 13.2652 22 13 22C12.7348 22 12.4804 21.8946 12.2929 21.7071C12.1054 21.5196 12 21.2652 12 21V13C12 12.7348 12.1054 12.4804 12.2929 12.2929C12.4804 12.1054 12.7348 12 13 12C13.2652 12 13.5196 12.1054 13.7071 12.2929C13.8946 12.4804 14 12.7348 14 13ZM20 13V21C20 21.2652 19.8946 21.5196 19.7071 21.7071C19.5196 21.8946 19.2652 22 19 22C18.7348 22 18.4804 21.8946 18.2929 21.7071C18.1054 21.5196 18 21.2652 18 21V13C18 12.7348 18.1054 12.4804 18.2929 12.2929C18.4804 12.1054 18.7348 12 19 12C19.2652 12 19.5196 12.1054 19.7071 12.2929C19.8946 12.4804 20 12.7348 20 13Z" />
                        </svg>

                    </button>
                    <button class="odecci-save"> <span>Save</span> <svg width="30" height="30" viewBox="0 0 24 26"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V22C0 22.5304 0.210714 23.0391 0.585786 23.4142C0.960859 23.7893 1.46957 24 2 24H22C22.5304 24 23.0391 23.7893 23.4142 23.4142C23.7893 23.0391 24 22.5304 24 22V2C24 1.46957 23.7893 0.960859 23.4142 0.585786C23.0391 0.210714 22.5304 0 22 0ZM22 2V15H18.4125C18.15 14.9993 17.8899 15.0508 17.6474 15.1514C17.405 15.2521 17.1849 15.3999 17 15.5863L14.5863 18H9.41375L7 15.5863C6.81496 15.3997 6.59468 15.2518 6.35198 15.1512C6.10928 15.0506 5.84899 14.9992 5.58625 15H2V2H22ZM22 22H2V17H5.58625L8 19.4137C8.18504 19.6003 8.40532 19.7482 8.64802 19.8488C8.89072 19.9494 9.15101 20.0008 9.41375 20H14.5863C14.849 20.0008 15.1093 19.9494 15.352 19.8488C15.5947 19.7482 15.815 19.6003 16 19.4137L18.4137 17H22V22ZM7.2925 11.7075C7.10486 11.5199 6.99944 11.2654 6.99944 11C6.99944 10.7346 7.10486 10.4801 7.2925 10.2925C7.48014 10.1049 7.73464 9.99944 8 9.99944C8.26536 9.99944 8.51986 10.1049 8.7075 10.2925L11 12.5863V5C11 4.73478 11.1054 4.48043 11.2929 4.29289C11.4804 4.10536 11.7348 4 12 4C12.2652 4 12.5196 4.10536 12.7071 4.29289C12.8946 4.48043 13 4.73478 13 5V12.5863L15.2925 10.2925C15.3854 10.1996 15.4957 10.1259 15.6171 10.0756C15.7385 10.0253 15.8686 9.99944 16 9.99944C16.1314 9.99944 16.2615 10.0253 16.3829 10.0756C16.5043 10.1259 16.6146 10.1996 16.7075 10.2925C16.8004 10.3854 16.8741 10.4957 16.9244 10.6171C16.9747 10.7385 17.0006 10.8686 17.0006 11C17.0006 11.1314 16.9747 11.2615 16.9244 11.3829C16.8741 11.5043 16.8004 11.6146 16.7075 11.7075L12.7075 15.7075C12.6146 15.8005 12.5043 15.8742 12.3829 15.9246C12.2615 15.9749 12.1314 16.0008 12 16.0008C11.8686 16.0008 11.7385 15.9749 11.6171 15.9246C11.4957 15.8742 11.3854 15.8005 11.2925 15.7075L7.2925 11.7075Z" />
                        </svg>


                    </button>
                </div>


            </div>
    </form>
</div>

</div>
@endsection