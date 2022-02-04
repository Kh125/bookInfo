<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">     
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">         
    <title>EbookCom</title>
</head>
<body class="relative bg-primarycolor">
    <header class="z-50 mx-auto flex flex-col md:flex-row justify-between items-center border-b border-gray-400 px-12 bg-lightcolor text-darkcolor">
        <div id="logo">
            <a href="/">
                <svg width="200" height="80" viewBox="0 0 465 255" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="4.5" y1="51" x2="4.5" y2="155" stroke="#24B0D0" stroke-width="9"/>
                    <line y1="46.5" x2="34" y2="46.5" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="9" y1="150.5" x2="49" y2="150.5" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="9" y1="98.5" x2="44" y2="98.5" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="33.6973" y="3" width="53" height="33" transform="rotate(38.8419 33.6973 3)" fill="white"/>
                    <path d="M49 41L49 155H58L58 41L49 41Z" fill="#24B0D0"/>
                    <line x1="75.1921" y1="92.0758" x2="121.779" y2="169.675" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="56" y1="150.5" x2="108" y2="150.5" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="75" y="155" width="100" height="100" fill="white"/>
                    <path d="M152.665 98.75L125 146.082L97.3354 98.75L152.665 98.75Z" fill="white" stroke="#24B0D0" stroke-width="9"/>
                    <path d="M150 81L114.493 20.25L185.507 20.25L150 81Z" fill="white"/>
                    <path d="M141.335 150.25L169 102.918L196.665 150.25H141.335Z" fill="white" stroke="#24B0D0" stroke-width="9"/>
                    <path d="M225.871 164.75L231.5 155L237.129 164.75H225.871Z" fill="white" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="52" y1="98.5" x2="81" y2="98.5" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="63" y="83" width="21" height="11" fill="white"/>
                    <line x1="218.885" y1="32.2711" x2="180.885" y2="97.2711" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="220.222" y1="157.217" x2="182.119" y2="92.2775" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="184.259" y1="106.756" x2="174.137" y2="89.5061" stroke="white" stroke-width="2"/>
                    <rect x="172" y="155" width="136" height="45" fill="white"/>
                    <rect x="136" y="8" width="89" height="36" fill="white"/>
                    <line x1="239" y1="150.5" x2="284" y2="150.5" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="239" y1="99.5" x2="284" y2="99.5" stroke="#24B0D0" stroke-width="9"/>
                    <line x1="243.5" y1="95" x2="243.5" y2="151" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="257.941" y="87.1196" width="31" height="22" transform="rotate(141.094 257.941 87.1196)" fill="white"/>
                    <rect x="297.941" y="168.12" width="31" height="22" transform="rotate(141.094 297.941 168.12)" fill="white"/>
                    <rect x="295.5" y="99.5" width="45" height="51" fill="white" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="356.5" y="99.5" width="45" height="51" fill="white" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="401.5" y="99.5" width="45" height="51" fill="white" stroke="#24B0D0" stroke-width="9"/>
                    <rect x="358.941" y="167.12" width="31" height="22" transform="rotate(141.094 358.941 167.12)" fill="white"/>
                    <rect x="464.941" y="168.12" width="31" height="22" transform="rotate(141.094 464.941 168.12)" fill="white"/>
                    <rect x="429.941" y="160.12" width="31" height="22" transform="rotate(141.094 429.941 160.12)" fill="white"/>
                    <rect x="388.941" y="157.12" width="31" height="22" transform="rotate(141.094 388.941 157.12)" fill="white"/>
                    <rect x="374.941" y="81.1196" width="31" height="22" transform="rotate(141.094 374.941 81.1196)" fill="white"/>
                    <rect x="314.941" y="81.1196" width="31" height="22" transform="rotate(141.094 314.941 81.1196)" fill="white"/>
                    <line x1="361" y1="150" x2="397" y2="150" stroke="white" stroke-width="10"/>
                    <line x1="406" y1="151" x2="442" y2="151" stroke="white" stroke-width="10"/>
                    </svg>                    
                {{-- <svg width="200" height="80" viewBox="0 0 66 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0638 12.2778C13.0554 12.2946 13.0075 12.3633 12.9201 12.484C12.8326 12.6046 12.6982 12.7475 12.5168 12.9127C12.3399 13.0788 12.1141 13.2551 11.8393 13.4415C11.5645 13.628 11.2329 13.7971 10.8444 13.949C10.4569 14.0964 10.0111 14.2122 9.50691 14.2964C9.00373 14.3761 8.43652 14.3973 7.80527 14.3599C7.38115 14.3358 6.94441 14.2739 6.49506 14.1742C6.12134 14.0913 5.75131 13.9811 5.38499 13.8438C5.02213 13.712 4.67953 13.5519 4.35718 13.3637C4.0383 13.1809 3.74857 12.9719 3.488 12.7367C3.22743 12.5014 3.01159 12.2435 2.84048 11.9628C2.67381 11.683 2.55904 11.3798 2.49617 11.0531C2.43873 10.7229 2.45098 10.3732 2.53293 10.0039C2.67806 9.3499 2.98314 8.82708 3.44817 8.43545C3.91764 8.0448 4.53743 7.79722 5.30753 7.69269C5.10626 7.40062 4.97493 7.09839 4.91355 6.786C4.85216 6.47362 4.85553 6.16393 4.92365 5.85695C5.00856 5.47433 5.1738 5.13988 5.41939 4.8536C5.66942 4.56831 5.97632 4.34232 6.34008 4.17563C6.70384 4.00894 7.1136 3.90848 7.56934 3.87423C8.03051 3.83653 8.51692 3.87445 9.02857 3.98798C9.54466 4.10251 9.98315 4.25117 10.3441 4.43395C10.7094 4.61773 11.0115 4.81314 11.2503 5.02018C11.4936 5.22821 11.6827 5.43824 11.8177 5.65025C11.9572 5.86326 12.0613 6.05675 12.13 6.23072C12.1988 6.4047 12.2413 6.54952 12.2577 6.66518C12.275 6.7764 12.2844 6.83917 12.2859 6.85351C12.2864 6.87229 12.2832 6.89725 12.2763 6.9284C12.2625 6.99068 12.2252 7.04309 12.1644 7.08562C12.109 7.12469 12.0435 7.13583 11.9679 7.11904C11.9145 7.1072 11.869 7.08076 11.8315 7.03975C11.7993 6.99527 11.7808 6.94214 11.7758 6.88035C11.7778 6.87145 11.7703 6.82079 11.7535 6.72836C11.7377 6.63148 11.6991 6.51088 11.6377 6.36656C11.5764 6.22224 11.4832 6.06384 11.3581 5.89136C11.2384 5.71543 11.0718 5.54074 10.8582 5.3673C10.6456 5.18941 10.3813 5.0234 10.0654 4.86927C9.74948 4.71514 9.36685 4.58822 8.9175 4.4885C8.40141 4.37398 7.93773 4.33877 7.52648 4.38289C7.11968 4.42799 6.76851 4.52745 6.47295 4.68127C6.18284 4.83163 5.94958 5.02027 5.77318 5.24721C5.59678 5.47415 5.48143 5.70997 5.42713 5.95467C5.36296 6.24386 5.37293 6.5355 5.45705 6.82959C5.54117 7.12367 5.69597 7.39377 5.92145 7.63987C6.17552 7.63089 6.42218 7.63428 6.66143 7.65003C6.90068 7.66577 7.12461 7.68746 7.33321 7.71507C7.5428 7.73824 7.7304 7.76587 7.89601 7.79795C8.06704 7.82657 8.20595 7.85273 8.31273 7.87642C8.50849 7.91986 8.68522 7.97542 8.84292 8.04309C9.00162 8.10632 9.13238 8.17968 9.23522 8.26319C9.3435 8.34324 9.42113 8.43515 9.46812 8.53894C9.5161 8.63829 9.52775 8.74357 9.50307 8.8548C9.47838 8.96602 9.4228 9.05872 9.33632 9.13289C9.24984 9.20707 9.13962 9.26197 9.00568 9.2976C8.87618 9.33421 8.72517 9.35205 8.55266 9.35112C8.38113 9.34573 8.19749 9.32132 8.00173 9.27788C7.78818 9.23049 7.57536 9.16926 7.36328 9.09418C7.1512 9.01911 6.94604 8.93391 6.74779 8.83856C6.55399 8.74421 6.36934 8.64021 6.19383 8.52657C6.0193 8.40848 5.86455 8.28545 5.72956 8.15746C4.97477 8.21404 4.37004 8.40428 3.91537 8.72819C3.4617 9.04764 3.1692 9.50324 3.03789 10.095C2.96681 10.4153 2.95825 10.7168 3.01221 10.9996C3.07161 11.2788 3.17969 11.5385 3.33646 11.7787C3.49323 12.0189 3.68928 12.2398 3.92464 12.4414C4.16542 12.6396 4.42944 12.8172 4.71667 12.9743C5.00391 13.1314 5.30944 13.2692 5.63324 13.3878C5.95804 13.5018 6.28505 13.5954 6.61428 13.6685C6.82784 13.7159 7.0362 13.7551 7.23937 13.7862C7.44353 13.8128 7.64249 13.8313 7.83626 13.8416C8.41659 13.877 8.93684 13.8571 9.39702 13.7818C9.86263 13.7031 10.2711 13.5977 10.6226 13.4656C10.9794 13.3301 11.2834 13.1804 11.5344 13.0168C11.7865 12.8486 11.9918 12.6911 12.1504 12.5443C12.3145 12.3939 12.4333 12.2686 12.507 12.1682C12.585 12.0689 12.6246 12.0169 12.6256 12.0125C12.6552 11.9631 12.693 11.9294 12.739 11.9116C12.7904 11.8904 12.8428 11.8856 12.8962 11.8975C12.9673 11.9133 13.022 11.9511 13.0601 12.0109C13.0981 12.0707 13.1098 12.1339 13.095 12.2007C13.091 12.2185 13.0806 12.2442 13.0638 12.2778ZM8.99439 8.74892C9.00229 8.71333 8.98028 8.67577 8.92837 8.63624C8.87646 8.59671 8.80526 8.5599 8.7148 8.52582C8.62976 8.48828 8.5299 8.45445 8.41521 8.42433C8.30151 8.38976 8.1846 8.35915 8.06448 8.33249C7.80198 8.27424 7.55086 8.22785 7.31111 8.19332C7.07235 8.15434 6.79528 8.13021 6.47991 8.12091C6.6925 8.25678 6.94192 8.38448 7.22816 8.50402C7.51983 8.6201 7.81917 8.7122 8.12615 8.78032C8.40644 8.84252 8.61826 8.86618 8.7616 8.85131C8.90495 8.83644 8.98255 8.80231 8.99439 8.74892Z" fill="#24B0D0"/>
                    <path d="M16.133 13.117C15.587 13.117 15.1883 12.935 14.937 12.571L13.845 13.351H13.598L15.054 4.836C14.794 4.862 14.5773 4.98333 14.404 5.2L14.209 5.044C14.469 4.732 14.794 4.576 15.184 4.576C15.5827 4.576 15.8903 4.67567 16.107 4.875C16.3237 5.07433 16.432 5.356 16.432 5.72C16.432 5.78933 16.4233 5.902 16.406 6.058C16.2673 6.82933 16.0983 7.75667 15.899 8.84C16.263 8.25067 16.7353 7.956 17.316 7.956C17.8967 7.956 18.343 8.125 18.655 8.463C18.967 8.79233 19.123 9.24733 19.123 9.828C19.123 10.8507 18.8457 11.6567 18.291 12.246C17.7363 12.8267 17.017 13.117 16.133 13.117ZM16.042 12.766C16.5187 12.766 16.9043 12.4367 17.199 11.778C17.5023 11.1107 17.654 10.283 17.654 9.295C17.654 8.89633 17.6107 8.62333 17.524 8.476C17.446 8.32867 17.2987 8.255 17.082 8.255C16.8653 8.255 16.64 8.385 16.406 8.645C16.1807 8.905 16.016 9.152 15.912 9.386C15.808 9.61133 15.756 9.74133 15.756 9.776H15.73C15.5133 10.9113 15.353 11.7693 15.249 12.35C15.3963 12.6273 15.6607 12.766 16.042 12.766ZM21.8002 13.117C21.1329 13.117 20.6259 12.9523 20.2792 12.623C19.9325 12.285 19.7592 11.8647 19.7592 11.362C19.7592 10.8507 19.8025 10.4173 19.8892 10.062C19.9845 9.698 20.1362 9.35133 20.3442 9.022C20.5522 8.684 20.8642 8.41967 21.2802 8.229C21.7049 8.03833 22.2292 7.943 22.8532 7.943C23.4859 7.943 23.9755 8.112 24.3222 8.45C24.6775 8.77933 24.8552 9.23433 24.8552 9.815C24.8552 10.803 24.5909 11.6003 24.0622 12.207C23.5422 12.8137 22.7882 13.117 21.8002 13.117ZM21.2282 11.778C21.2282 12.4713 21.4275 12.818 21.8262 12.818C22.2335 12.818 22.5932 12.4713 22.9052 11.778C23.2259 11.076 23.3862 10.244 23.3862 9.282C23.3862 8.554 23.1869 8.19 22.7882 8.19C22.3982 8.19 22.0385 8.52367 21.7092 9.191C21.3885 9.84967 21.2282 10.712 21.2282 11.778ZM27.5385 13.117C26.8711 13.117 26.3641 12.9523 26.0175 12.623C25.6708 12.285 25.4975 11.8647 25.4975 11.362C25.4975 10.8507 25.5408 10.4173 25.6275 10.062C25.7228 9.698 25.8745 9.35133 26.0825 9.022C26.2905 8.684 26.6025 8.41967 27.0185 8.229C27.4431 8.03833 27.9675 7.943 28.5915 7.943C29.2241 7.943 29.7138 8.112 30.0605 8.45C30.4158 8.77933 30.5935 9.23433 30.5935 9.815C30.5935 10.803 30.3291 11.6003 29.8005 12.207C29.2805 12.8137 28.5265 13.117 27.5385 13.117ZM26.9665 11.778C26.9665 12.4713 27.1658 12.818 27.5645 12.818C27.9718 12.818 28.3315 12.4713 28.6435 11.778C28.9641 11.076 29.1245 10.244 29.1245 9.282C29.1245 8.554 28.9251 8.19 28.5265 8.19C28.1365 8.19 27.7768 8.52367 27.4475 9.191C27.1268 9.84967 26.9665 10.712 26.9665 11.778ZM33.1078 10.491L32.6398 13H31.0928L32.5618 4.836C32.3018 4.862 32.0851 4.98333 31.9118 5.2L31.7168 5.044C31.9768 4.732 32.3018 4.576 32.6918 4.576C33.0904 4.576 33.3981 4.67567 33.6148 4.875C33.8314 5.07433 33.9398 5.356 33.9398 5.72C33.9398 5.78933 33.9311 5.902 33.9138 6.058C33.7144 7.15867 33.4978 8.346 33.2638 9.62C33.4804 9.09133 33.7924 8.67967 34.1998 8.385C34.6071 8.09033 35.0404 7.943 35.4998 7.943C35.9591 7.943 36.2798 8.034 36.4618 8.216C36.6524 8.398 36.7478 8.62767 36.7478 8.905C36.7478 9.17367 36.6654 9.39467 36.5008 9.568C36.3361 9.74133 36.1194 9.828 35.8508 9.828C35.5908 9.828 35.3871 9.75433 35.2398 9.607C35.1011 9.451 35.0318 9.22567 35.0318 8.931C35.0318 8.62767 35.1358 8.398 35.3438 8.242C34.5118 8.33733 33.8488 8.95267 33.3548 10.088C33.4761 10.0707 33.5801 10.062 33.6668 10.062C34.1261 10.062 34.4858 10.153 34.7458 10.335C35.0144 10.517 35.1878 10.7423 35.2658 11.011C35.3438 11.271 35.4001 11.5353 35.4348 11.804C35.4694 12.064 35.5258 12.285 35.6038 12.467C35.6818 12.649 35.8204 12.74 36.0198 12.74C36.2191 12.74 36.3751 12.6577 36.4878 12.493L36.6828 12.649C36.6221 12.7703 36.4878 12.8787 36.2798 12.974C36.0718 13.0693 35.8031 13.117 35.4738 13.117C35.1531 13.117 34.8671 13.0347 34.6158 12.87C34.3731 12.7053 34.2041 12.5017 34.1088 12.259C34.0134 12.0077 33.9354 11.7607 33.8748 11.518C33.7101 10.894 33.4544 10.5517 33.1078 10.491Z" fill="#24B0D0"/>
                    <path d="M46.008 8.044H44.952V6.616C44.952 6.456 44.928 6.356 44.88 6.316C44.832 6.268 44.732 6.244 44.58 6.244H41.508C41.356 6.244 41.256 6.268 41.208 6.316C41.16 6.356 41.136 6.456 41.136 6.616V11.92C41.136 12.08 41.16 12.184 41.208 12.232C41.256 12.272 41.356 12.292 41.508 12.292H44.58C44.732 12.292 44.832 12.272 44.88 12.232C44.928 12.184 44.952 12.08 44.952 11.92V10.492H46.008V12.052C46.008 12.684 45.692 13 45.06 13H41.028C40.396 13 40.08 12.684 40.08 12.052V6.484C40.08 5.852 40.396 5.536 41.028 5.536H45.06C45.692 5.536 46.008 5.852 46.008 6.484V8.044ZM52.1827 11.92V8.26C52.1827 8.108 52.1587 8.008 52.1107 7.96C52.0707 7.912 51.9707 7.888 51.8107 7.888H49.0747C48.9147 7.888 48.8107 7.912 48.7627 7.96C48.7227 8.008 48.7027 8.108 48.7027 8.26V11.92C48.7027 12.08 48.7227 12.184 48.7627 12.232C48.8107 12.272 48.9147 12.292 49.0747 12.292H51.8107C51.9707 12.292 52.0707 12.272 52.1107 12.232C52.1587 12.184 52.1827 12.08 52.1827 11.92ZM48.6307 7.18H52.2547C52.8867 7.18 53.2027 7.496 53.2027 8.128V12.052C53.2027 12.684 52.8867 13 52.2547 13H48.6307C47.9987 13 47.6827 12.684 47.6827 12.052V8.128C47.6827 7.496 47.9987 7.18 48.6307 7.18ZM61.2801 7.18H63.8241C64.4561 7.18 64.7721 7.496 64.7721 8.128V13H63.7401V8.26C63.7401 8.108 63.7161 8.008 63.6681 7.96C63.6201 7.912 63.5201 7.888 63.3681 7.888H61.0281C60.8761 7.888 60.7681 7.924 60.7041 7.996C60.6401 8.06 60.6081 8.168 60.6081 8.32V13H59.5761V8.26C59.5761 8.108 59.5521 8.008 59.5041 7.96C59.4641 7.912 59.3641 7.888 59.2041 7.888H56.6841C56.5401 7.888 56.4361 7.92 56.3721 7.984C56.3081 8.048 56.2761 8.156 56.2761 8.308V13H55.2441V7.18H56.2761V7.564C56.3801 7.308 56.6001 7.18 56.9361 7.18H59.6601C60.1161 7.18 60.4081 7.344 60.5361 7.672C60.6161 7.344 60.8641 7.18 61.2801 7.18Z" fill="#24B0D0"/>
                    <path d="M37.72 13V11.608H38.908V13H37.72Z" fill="#24B0D0"/>
                </svg>                     --}}
            </a>               
        </div>
        <div class="flex flex-col lg:flex-row items-center lg:space-x-10">
            <ul class="flex flex-col md:flex-row items-center md:space-x-14 mb-0 md:mb-5 lg:mb-0 mt-5 lg:mt-0">
                @auth                    
                    <li class="hover:text-primarycolor transition duration-150 mb-5 md:mb-0 font-semibold">
                        <a href="{{ route('books.api') }}">Google Books</a>
                    </li>
                    <li class="hover:text-primarycolor transition duration-150 mb-5 md:mb-0 font-semibold">
                        <a href="{{ route('books.index') }}">Community Books</a>
                    </li>
                @endauth
                @guest
                    <li class="hover:text-primarycolor transition duration-150 mb-5 md:mb-0 font-semibold">
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="hover:text-primarycolor transition duration-150 mb-5 md:mb-0 font-semibold">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="hover:text-primarycolor transition duration-150 mb-5 md:mb-0 font-semibold">
                        <a href="{{ route('login') }}">Login</a>
                    </li> 
                    <li class="hover:text-primarycolor transition duration-150 mb-5 md:mb-0 font-semibold">
                        <a href="{{ route('register') }}">Register</a>
                    </li>
                @endguest
            </ul>
            @auth                
                <div id="search-box" class="relative flex flex-col md:flex-row items-center md:space-x-5 mb-5 lg:mb-0">
                    <div class="relative mb-5 md:mb-0">
                        <form name="search-form" id="search-form" action="{{ route('books.search') }}" method="GET">                            
                            <input type="text" name="searchQuery" class="placeholder-darkcolor rounded-full bg-white-500 border border-primarycolor w-64 pl-8 py-2 h-8 outline-none" placeholder="Search books from Google">
                            <div class="absolute top-0">
                                <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui text-darkcolor" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                            </div>
                        </form>                        
                    </div>
                    <div class="relative z-50 profile-box">                        
                        {{-- drop-down --}}
                        <div class="relative inline-block text-left">
                            <div>
                                <a id="profile-button" class="setting-button hover:shadow-lg hover:opacity-80">                                    
                                    {{-- <img @if(Auth::user()->file_path != null) 
                                    src="/storage/images/{{ Auth::user()->file_path }}"
                                    @else src="https://ui-avatars.com/api/?size=64&name=Khant"
                                    @endif alt="user" class=" hover:shadow-lg hover:opacity-80 hover:border-primarycolor transition duration-200 object-cover rounded-full w-7 h-7" aria-expanded="true" aria-haspopup="true"> --}}

                                    {{-- // we use default photo for all users since i have no storage to store user uploaded photo in heroku. --}}
                                    <img src="https://ui-avatars.com/api/?size=64&name={{ auth()->user()->name }}" alt="user" class="hover:shadow-lg hover:opacity-80 hover:border-primarycolor transition duration-200 object-cover rounded-full w-7 h-7" aria-expanded="true" aria-haspopup="true">
                                </a>                         
                            </div>                        
                            <div id="dropdown-box" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-300 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="">
                                    <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                    <a href="{{ route('user.profile', Auth::user()) }}" class="rounded-t-md transition duration-200 hover:bg-slate-200 text-gray-700 flex items-center px-4 py-3 text-sm">
                                        <svg class="mr-4" width="18px" height="19px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.532px" height="45.532px" viewBox="0 0 45.532 45.532" style="enable-background:new 0 0 45.532 45.532;" xml:space="preserve">
                                            <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                                            S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                                            c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                                            c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                                            c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"/>
                                        </svg>                                        
                                        Profile
                                    </a>
                                </div>                            
                                <div class="">
                                    <a href="{{ route('favourite') }}" class="transition duration-200 hover:bg-slate-200 text-gray-700 flex items-center px-4 py-3 text-sm">                                     
                                        <svg class="mr-4" width="17px" height="17px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
                                            <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.383-60.399-46.92-99.132-46.92
                                            C57.586,10.346,0,67.931,0,138.714c0,55.426,33.049,119.535,98.23,190.546c50.162,54.649,104.729,96.96,120.257,108.626l9.01,6.769
                                            l9.009-6.768c15.53-11.667,70.099-53.979,120.26-108.625C421.95,258.251,455,194.141,455,138.714
                                            C455,67.931,397.414,10.346,326.632,10.346z"/>
                                        </svg>                                  
                                        Favourite
                                    </a>
                                </div>
                                <div class="">
                                    <a href="{{ route('upload') }}" class="transition duration-200 hover:bg-slate-200 text-gray-700 flex items-center px-4 py-3 text-sm">                                     
                                        <svg class="mr-4" width="18px" height="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
                                            <polygon points="163.07,268.626 321.93,268.626 321.93,153.056 380.926,153.056 242.5,1.374 104.074,153.056 163.07,153.056 	"/>
                                            <path d="M0,308.626v175h485v-175H0z M330,411.126c-8.284,0-15-6.716-15-15s6.716-15,15-15c8.284,0,15,6.716,15,15S338.284,411.126,330,411.126z M400,411.126c-8.284,0-15-6.716-15-15s6.716-15,15-15c8.284,0,15,6.716,15,15S408.284,411.126,400,411.126z"/>
                                        </svg>                                  
                                        Upload
                                    </a>
                                </div>
                                <div class="">
                                    <a href="{{ route('logout') }}" class="rounded-b-md transition duration-200 hover:bg-slate-200 text-gray-700 flex items-center px-4 py-3 text-sm">
                                        <svg class="mr-4" width="18px" height="18px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path fill="none" d="M0 0h24v24H0z"/>
                                                <path d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H5zm10-6l5-4-5-4v3H9v2h6v3z"/>
                                            </g>
                                        </svg>                                    
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- drop-down --}}
                    </div>
                </div>
            @endauth
        </div>
    </header>  
    
    @if (session('error'))
        <div id="modal-box" class="bg-primarycolor mb-16 p-10">
            <div class="transition duration-200 absolute shadow-md mx-auto lg:right-10 flex flex-wrap justify-between items-center mt-5 p-6 w-72 sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg error bg-lightcolor border-2 border-red-500 text-center text-red-500" data-aos="fade-left" data-aos-duration="600">
                <p class="font-bold">{{ session('error') }}</p>
                <a id="close-button" onclick="toggleDiv()">
                    <svg id="Layer_1" class="w-3 h-3" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>remove-delete-glyph</title><polygon points="512 86.78 425.22 0 256 169.22 86.78 0 0 86.78 169.22 256 0 425.22 86.78 512 256 342.78 425.22 511.99 512 425.22 342.78 256 512 86.78" fill="#5b5b5f"/></svg>
                </a>
            </div> 
        </div>
    @endif     
    @if (session('status'))
        <div id="modal-box" class="bg-primarycolor mb-16 p-10">
            <div class="transition duration-200 absolute shadow-md mx-auto lg:right-10 flex flex-wrap justify-between items-center mt-5 p-6 w-72 sm:w-7/12 md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg error bg-lightcolor border-2 border-primarycolor text-center text-primarycolor" data-aos="fade-left" data-aos-duration="600">
                <p class="font-bold">{{ session('status') }}</p>
                <a id="close-button" onclick="toggleDiv()">
                    <svg id="Layer_1" class="w-3 h-3" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>remove-delete-glyph</title><polygon points="512 86.78 425.22 0 256 169.22 86.78 0 0 86.78 169.22 256 0 425.22 86.78 512 256 342.78 425.22 511.99 512 425.22 342.78 256 512 86.78" fill="#5b5b5f"/></svg>
                </a>
            </div> 
        </div>
    @endif 
    @yield('content')
    @guest
        <footer id="contact" class="py-10 md:py-18 px-12 bg-lightcolor text-darkcolor">
            <div class="mx-auto flex flex-col md:flex-row flex-wrap justify-between items-center md:items-start text-center md:text-left pb-8 border-b border-darkcolor" data-aos="fade-in" data-aos-duration="500">
                <div class="first-period mx-auto md:mx-0">
                    <div>
                        <h2 class="mb-3 md:mb-5 uppercase text-lg font-semibold">Connect</h2>
                        <ul class="flex flex-row items-center justify-center md:justify-start mx-auto">
                            <li class="mr-3">
                                <a href="#" class="hover:opacity-75 transition duration-150">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" width="32px" height="32px"><path d="M 3.5 1 C 2.1250151 1 1 2.1250151 1 3.5 L 1 11.5 C 1 12.874985 2.1250151 14 3.5 14 L 11.5 14 C 12.874985 14 14 12.874985 14 11.5 L 14 3.5 C 14 2.1250151 12.874985 1 11.5 1 L 3.5 1 z M 3.5 2 L 11.5 2 C 12.335015 2 13 2.6649849 13 3.5 L 13 11.5 C 13 12.335015 12.335015 13 11.5 13 L 9.9042969 13 L 9.9042969 8.9667969 L 11.300781 8.9667969 L 11.509766 7.3574219 L 9.9042969 7.3574219 L 9.9042969 6.3320312 C 9.9042969 5.8660312 10.034031 5.5488281 10.707031 5.5488281 L 11.566406 5.5488281 L 11.566406 4.109375 C 11.417406 4.089375 10.907453 4.046875 10.314453 4.046875 C 9.0764531 4.046875 8.2304688 4.795875 8.2304688 6.171875 L 8.2304688 7.3574219 L 7 7.3535156 L 7 8.9628906 L 8.2304688 8.9667969 L 8.2304688 13 L 3.5 13 C 2.6649849 13 2 12.335015 2 11.5 L 2 3.5 C 2 2.6649849 2.6649849 2 3.5 2 z"/></svg>
                                </a>
                            </li>
                            <li class="mr-3">
                                <a href="#" class="hover:opacity-75 transition duration-150">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" width="32px" height="32px"><path d="M 4.773438 1 C 2.695313 1 1 2.695313 1 4.773438 L 1 10.230469 C 1 12.304688 2.695313 14 4.773438 14 L 10.230469 14 C 12.304688 14 14 12.304688 14 10.226563 L 14 4.773438 C 14 2.695313 12.304688 1 10.226563 1 Z M 4.773438 2 L 10.226563 2 C 11.765625 2 13 3.234375 13 4.773438 L 13 10.226563 C 13 11.765625 11.765625 13 10.230469 13 L 4.773438 13 C 3.234375 13 2 11.765625 2 10.230469 L 2 4.773438 C 2 3.234375 3.234375 2 4.773438 2 Z M 11.5 3 C 11.222656 3 11 3.222656 11 3.5 C 11 3.777344 11.222656 4 11.5 4 C 11.777344 4 12 3.777344 12 3.5 C 12 3.222656 11.777344 3 11.5 3 Z M 7.5 4 C 5.574219 4 4 5.574219 4 7.5 C 4 9.425781 5.574219 11 7.5 11 C 9.425781 11 11 9.425781 11 7.5 C 11 5.574219 9.425781 4 7.5 4 Z M 7.5 5 C 8.886719 5 10 6.113281 10 7.5 C 10 8.886719 8.886719 10 7.5 10 C 6.113281 10 5 8.886719 5 7.5 C 5 6.113281 6.113281 5 7.5 5 Z"/></svg>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="hover:opacity-75 transition duration-150">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" width="32px" height="32px"><path d="M 15 3.296875 C 14.476563 3.523438 13.949219 3.691406 13.367188 3.746094 C 13.949219 3.410156 14.417969 2.84375 14.648438 2.226563 C 14.066406 2.5625 13.484375 2.789063 12.84375 2.902344 C 12.257813 2.339844 11.5 2 10.683594 2 C 9.109375 2 7.824219 3.242188 7.824219 4.765625 C 7.824219 4.988281 7.824219 5.214844 7.882813 5.386719 C 4.875 5.386719 2.8125 3.691406 1.414063 2 C 1.121094 2.394531 1.003906 2.902344 1.003906 3.410156 C 1.003906 4.367188 1.53125 5.214844 2.289063 5.722656 C 1.820313 5.667969 1.355469 5.554688 1.003906 5.386719 C 1.003906 5.386719 1.003906 5.386719 1.003906 5.441406 C 1.003906 6.796875 1.996094 7.921875 3.28125 8.148438 C 3.046875 8.203125 2.8125 8.261719 2.519531 8.261719 C 2.347656 8.261719 2.171875 8.261719 1.996094 8.207031 C 2.347656 9.335938 3.976563 10.632813 5.257813 10.632813 C 4.265625 11.363281 3.34375 12 1.5 12 C 1.265625 12 1.453125 12 1 12 C 2.28125 12.789063 3.800781 13 5.375 13 C 10.683594 13 13.542969 8.769531 13.542969 5.101563 C 13.542969 4.988281 13.542969 4.878906 13.542969 4.765625 C 14.125 4.367188 14.59375 3.863281 15 3.296875"/></svg>
                                </a>
                            </li>
                        </ul>            
                    </div>
                    <div class="location mt-5 pt-2">
                        <h2 class="mb-3 uppercase text-lg font-semibold">Location</h2>
                        <p class="text-left">Email: &nbsp;&nbsp; andycole.ofc@gmail.com</p>
                        <p class="text-left">Phone: &nbsp;&nbsp; +95967345789</p>
                        <p class="text-left">Address: &nbsp;&nbsp; No.72, Ava Road, Rangoon</p>
                    </div>
                </div>
                <div class="mt-10 md:mt-0 second-period mx-auto md:mx-0">
                    <h2 class="mb-3 md:mb-5 uppercase text-lg font-semibold">Links</h2>
                    <ul>
                        <li class="mt-2">
                            <a href="#" class="hover:opacity-75 hover:underline transition duration-150">Home</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="hover:opacity-75 hover:underline transition duration-150">Books</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="hover:opacity-75 hover:underline transition duration-150">Uploads</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-10 md:mt-0 fourth-period mx-auto md:mx-0">
                    <h2 class="mb-3 md:mb-5 uppercase text-lg font-semibold">Essentials</h2>
                    <ul>
                        <li class="mt-2">
                            <a href="#" class="hover:opacity-75 hover:underline transition duration-150">FAQ</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="hover:opacity-75 hover:underline transition duration-150">About us</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="hover:opacity-75 hover:underline transition duration-150">Api</a>
                        </li>
                    </ul>
                </div>
                <div class="mt-10 md:mt-8 lg:mt-0 third-section mx-auto md:mx-0 bg-darkcolor p-6 rounded-lg text-lightcolor">
                    <h2 class="mb-3 md:mb-5 uppercase font-semibold text-lg text-left">Reach Us</h2>
                    <div class="contact-form md:mx-auto">
                        <form class="space-y-4 text-left">
                            @csrf
                            <div class="name ">
                                <input type="text" class="w-full block border border-lightcolor bg-lightcolor p-2 rounded-md placeholder-darkcolor outline-none text-darkcolor shadow-md" placeholder="Name">
                            </div>
                            <div class="email">
                                <input type="text" class="w-full block border border-lightcolor bg-lightcolor p-2 rounded-md placeholder-darkcolor outline-none text-darkcolor shadow-md" placeholder="Email">
                            </div>                        
                            <div class="textarea">
                                <textarea name="" id="" cols="30" rows="3" class="w-full block border border-lightcolor bg-lightcolor p-2 rounded-md placeholder-darkcolor outline-none text-darkcolor shadow-md resize-none" placeholder="Text here..."></textarea>
                            </div>
                            <button class="hover:bg-opacity-95 transition duration-150 hover:text-primarycolor px-6 py-2 rounded-lg bg-lightcolor text-darkcolor text-center">
                                Send
                            </button>
                        </form>
                    </div>
                </div>
            </div>        
            <p class="mt-5 text-center font-regular">
                &copy;2017 - {{ date('Y') }}. All rights reserved by EBCom.
            </p>
        </footer>
    @endguest    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  
    <script>        
        AOS.init();    
        const div = document.getElementById('modal-box');  
        
        // for profile-dropdown toggle
        $('#dropdown-box').hide();
        $('#profile-button').click(function(){
            $('#dropdown-box').fadeToggle(100);
        });

        $(document).keyup(function(e) {
            if (e.key === "Escape") { // escape key maps to keycode `27`
                $('#dropdown-box').fadeOut(100);
            }
        });

        $(document).mouseup(function(e) 
        {
            var container = $('#dropdown-box');
            var button = $('#profile-button');
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0 && !button.is(e.target) && button.has(e.target).length === 0) 
            {
                container.hide();
            }
        });
        // drop-down-toggle end

        // close-button-for-flash-status
        function toggleDiv(e) {
            div.classList.add("hidden");
        }
        // close-button-for-flash-status
        
    </script>
</body>
</html>