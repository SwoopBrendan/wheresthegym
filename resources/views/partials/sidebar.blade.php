<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                <i class="ti-panel"></i>
                Settings
            </a>
        </div>

        <ul class="nav">
            <li class="text-center">
                <a>
                    <p>Type</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkGymType" value="crossFit"> CrossFit
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkGymType" value="powerLifting"> Power Lifting
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkGymType" value="strongman"> Strongman
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="checkGymType" value="bodyBuilding"> Body Building
                                </label>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="text-center">
                <a>
                <label for="output">Distance (KM): </label>&nbsp;<span id="output"></span>
                <div id="slidecontainer">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>
                </a>
            </li>
            <li>
                <a>
                    <button type="submit" class="btn btn-default" style="width: 100%">Update</button>
                </a>
            </li>
        </ul>
    </div>
</div>