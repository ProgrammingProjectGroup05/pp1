function createNavBar() {
    const html = `<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Car share</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="${"/index.html"}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="${'/register.html'}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In</a>
                    </li>
                </ul>
            </div>
        </nav>`
    const wrapper = document.querySelector('.wrapper');
    wrapper.insertAdjacentHTML('afterbegin', html)
    console.log('Running')
}
createNavBar()



